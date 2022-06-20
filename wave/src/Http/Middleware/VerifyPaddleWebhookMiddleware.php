<?php

namespace Wave\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\Exception\AccessDeniedException;

final class VerifyPaddleWebhookMiddleware
{
    public const SIGNATURE_KEY = 'p_signature';

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (is_null(config('wave.paddle.public_key'))) {
            throw new AccessDeniedException('No Paddle public key set.');
        }

        $fields = $this->getPaddleFields($request);
        $signature = $request->get(self::SIGNATURE_KEY);

        if (! $this->hasValidSignature($fields, $signature)) {
            throw new AccessDeniedException('Invalid webhook signature.');
        }

        return $next($request);
    }

    protected function getPaddleFields(Request $request): array
    {
        $fields = $request->except(self::SIGNATURE_KEY);

        ksort($fields);

        foreach ($fields as $key => $value) {
            if (! in_array(gettype($value), ['object', 'array'])) {
                $fields[$key] = $value;
            }
        }

        return $fields;
    }

    protected function hasValidSignature(array $fields, string $signature): bool
    {
        return openssl_verify(serialize($fields), base64_decode($signature), openssl_get_publickey(config('wave.paddle.public_key')), OPENSSL_ALGO_SHA1) !== 1;
    }
}
