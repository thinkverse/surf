<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Wave\Page;

class PagesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->delete();

        Page::create([
            'author_id' => 1,
            'title' => 'Hello World',
            'excerpt' => 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.',
            'body' => '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>
<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>',
            'image' => 'pages/page1.jpg',
            'slug' => 'hello-world',
            'meta_description' => 'Yar Meta Description',
            'meta_keywords' => 'Keyword1, Keyword2',
            'status' => Page::STATUS_ACTIVE,
        ]);

        Page::create([
            'author_id' => 1,
            'title' => 'About',
            'excerpt' => 'This is the about page.',
            'body' => '<p>Wave is the ultimate&nbsp;Software as a Service Starter kit. If you\'ve ever wanted to create your own SAAS application, Wave can help save you hundreds of hours. Wave is one of a kind and it is built on top of Laravel and Voyager. Building your application is going to be funner&nbsp;than ever before... Funner may not be a real word, but you get where I\'m trying to go.</p>
<p>Wave has a bunch of functionality built-in that will save you a bunch of time. Your users will be able to update their settings, billing information, profile information and so much more. You will also be able to accept&nbsp;payments from your user with multiple vendors.</p>
<p>We want to help you build the SAAS of your dreams by making it easier and less time-consuming. Let\'s start creating some "Waves" and build out the SAAS in your particular niche... Sorry about that Wave pun...</p>',
            'image' => null,
            'slug' => 'about',
            'meta_description' => 'About Wave',
            'meta_keywords' => 'about, wave',
            'status' => Page::STATUS_ACTIVE,
        ]);

        Page::create([
            'author_id' => 1,
            'title' => 'Privacy Policy',
            'excerpt' => 'This Privacy Policy has been created with the help of the [Privacy Policy Generator](https://www.privacypolicies.com/privacy-policy-generator/). And is thus an example, and not to be
            taken as legal advice! Update this page with your own **LEGAL** privacy policy.',
            'body' => '<p>Last updated: May 19, 2022<p>This Privacy Policy has been created with the help of the <a href=https://www.privacypolicies.com/privacy-policy-generator/ >Privacy Policy Generator</a>. And is thus an example, and not to be taken as legal advice! Update this page with your own <strong>LEGAL</strong> privacy policy.<p>
            This Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your information when You use the Service and tells You about Your privacy rights and how the law protects You.<p>
            We use Your Personal data to provide and improve the Service. By using the Service, You agree to the collection and use of information in accordance with this Privacy Policy.<h2 id=interpretation-and-definitions>Interpretation and Definitions</h2><h3 id=interpretation>Interpretation</h3><p>
            The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.<h3 id=definitions>Definitions</h3><p>For the purposes of this Privacy Policy:<ul><li><p><strong>Account</strong>
             means a unique account created for You to access our Service or parts of our Service.<li><p><strong>Company</strong> (referred to as either "the Company", "We", "Us" or "Our" in this Agreement) refers to Surf.<li><p><strong>Cookies</strong>
             are small files that are placed on Your computer, mobile device or any other device by a website, containing the details of Your browsing history on that website among its many uses.<li><p><strong>Country</strong> refers to: Foosha Village, East Blue<li><p><strong>Device</strong>
             means any device that can access the Service such as a computer, a cellphone or a digital tablet.<li><p><strong>Personal Data</strong> is any information that relates to an identified or identifiable individual.<li><p><strong>Service</strong> refers to the Website.<li><p><strong>Service Provider</strong>
             means any natural or legal person who processes the data on behalf of the Company. It refers to third-party companies or individuals employed by the Company to facilitate the Service, to provide the Service on behalf of the Company, to perform services related to the Service or to assist the Company in analyzing how the Service is used.<li><p>
            <strong>Usage Data</strong> refers to data collected automatically, either generated by the use of the Service or from the Service infrastructure itself (for example, the duration of a page visit).<li><p><strong>Website</strong> refers to Surf, accessible from <a href=http://surf.test>http://surf.test</a><li><p><strong>You</strong>
             means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</ul><h2 id=collecting-and-using-your-personal-data>Collecting and Using Your Personal Data</h2><h3 id=types-of-data-collected>Types of Data Collected</h3><h4
            id=personal-data>Personal Data</h4><p>While using Our Service, We may ask You to provide Us with certain personally identifiable information that can be used to contact or identify You. Personally identifiable information may include, but is not limited to:<ul><li><p>Email address<li><p>First name and last name<li><p>Usage Data</ul><h4
            id=usage-data>Usage Data</h4><p>Usage Data is collected automatically when using the Service.<p>
            Usage Data may include information such as Your Device\'s Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that You visit, the time and date of Your visit, the time spent on those pages, unique device identifiers and other diagnostic data.<p>
            When You access the Service by or through a mobile device, We may collect certain information automatically, including, but not limited to, the type of mobile device You use, Your mobile device unique ID, the IP address of Your mobile device, Your mobile operating system, the type of mobile Internet browser You use, unique device identifiers and other diagnostic data.
            <p>We may also collect information that Your browser sends whenever You visit our Service or when You access the Service by or through a mobile device.<h4 id=tracking-technologies-and-cookies>Tracking Technologies and Cookies</h4><p>
            We use Cookies and similar tracking technologies to track the activity on Our Service and store certain information. Tracking technologies used are beacons, tags, and scripts to collect and track information and to improve and analyze Our Service. The technologies We use may include:<ul><li><strong>Cookies or Browser Cookies.</strong>
             A cookie is a small file placed on Your Device. You can instruct Your browser to refuse all Cookies or to indicate when a Cookie is being sent. However, if You do not accept Cookies, You may not be able to use some parts of our Service. Unless you have adjusted Your browser setting so that it will refuse Cookies, our Service may use Cookies.<li>
            <strong>Web Beacons.</strong>
             Certain sections of our Service and our emails may contain small electronic files known as web beacons (also referred to as clear gifs, pixel tags, and single-pixel gifs) that permit the Company, for example, to count users who have visited those pages or opened an email and for other related website statistics (for example, recording the popularity of a certain section and verifying system and server integrity).
            </ul><p>Cookies can be "Persistent" or "Session" Cookies. Persistent Cookies remain on Your personal computer or mobile device when You go offline, while Session Cookies are deleted as soon as You close Your web browser. Learn more about cookies: <a
            href=https://www.privacypolicies.com/blog/privacy-policy-template/#Use_Of_Cookies_Log_Files_And_Tracking>Cookies by PrivacyPolicies Generator</a>.<p>We use both Session and Persistent Cookies for the purposes set out below:<ul><li><p><strong>Necessary / Essential Cookies</strong><p>Type: Session Cookies<p>Administered by: Us<p>
            Purpose: These Cookies are essential to provide You with services available through the Website and to enable You to use some of its features. They help to authenticate users and prevent fraudulent use of user accounts. Without these Cookies, the services that You have asked for cannot be provided, and We only use these Cookies to provide You with those services.
            <li><p><strong>Cookies Policy / Notice Acceptance Cookies</strong><p>Type: Persistent Cookies<p>Administered by: Us<p>Purpose: These Cookies identify if users have accepted the use of cookies on the Website.<li><p><strong>Functionality Cookies</strong><p>Type: Persistent Cookies<p>Administered by: Us<p>
            Purpose: These Cookies allow us to remember choices You make when You use the Website, such as remembering your login details or language preference. The purpose of these Cookies is to provide You with a more personal experience and to avoid You having to re-enter your preferences every time You use the Website.</ul><p>
            For more information about the cookies we use and your choices regarding cookies, please visit our Cookies Policy or the Cookies section of our Privacy Policy.<h3 id=use-of-your-personal-data>Use of Your Personal Data</h3><p>The Company may use Personal Data for the following purposes:<ul><li><p><strong>To provide and maintain our Service</strong>
            , including to monitor the usage of our Service.<li><p><strong>To manage Your Account:</strong> to manage Your registration as a user of the Service. The Personal Data You provide can give You access to different functionalities of the Service that are available to You as a registered user.<li><p><strong>For the performance of a contract:</strong>
             the development, compliance and undertaking of the purchase contract for the products, items or services You have purchased or of any other contract with Us through the Service.<li><p><strong>To contact You:</strong>
             To contact You by email, telephone calls, SMS, or other equivalent forms of electronic communication, such as a mobile application\'s push notifications regarding updates or informative communications related to the functionalities, products or contracted services, including the security updates, when necessary or reasonable for their implementation.
            <li><p><strong>To provide You</strong> with news, special offers and general information about other goods, services and events which we offer that are similar to those that you have already purchased or enquired about unless You have opted not to receive such information.<li><p><strong>To manage Your requests:</strong>
             To attend and manage Your requests to Us.<li><p><strong>For business transfers:</strong>
             We may use Your information to evaluate or conduct a merger, divestiture, restructuring, reorganization, dissolution, or other sale or transfer of some or all of Our assets, whether as a going concern or as part of bankruptcy, liquidation, or similar proceeding, in which Personal Data held by Us about our Service users is among the assets transferred.
            <li><p><strong>For other purposes</strong>: We may use Your information for other purposes, such as data analysis, identifying usage trends, determining the effectiveness of our promotional campaigns and to evaluate and improve our Service, products, services, marketing and your experience.</ul><p>
            We may share Your personal information in the following situations:<ul><li><strong>With Service Providers:</strong> We may share Your personal information with Service Providers to monitor and analyze the use of our Service, to contact You.<li><strong>For business transfers:</strong>
             We may share or transfer Your personal information in connection with, or during negotiations of, any merger, sale of Company assets, financing, or acquisition of all or a portion of Our business to another company.<li><strong>With Affiliates:</strong>
             We may share Your information with Our affiliates, in which case we will require those affiliates to honor this Privacy Policy. Affiliates include Our parent company and any other subsidiaries, joint venture partners or other companies that We control or that are under common control with Us.<li><strong>With business partners:</strong>
             We may share Your information with Our business partners to offer You certain products, services or promotions.<li><strong>With other users:</strong> when You share personal information or otherwise interact in the public areas with other users, such information may be viewed by all users and may be publicly distributed outside.<li><strong>
            With Your consent</strong>: We may disclose Your personal information for any other purpose with Your consent.</ul><h3 id=retention-of-your-personal-data>Retention of Your Personal Data</h3><p>
            The Company will retain Your Personal Data only for as long as is necessary for the purposes set out in this Privacy Policy. We will retain and use Your Personal Data to the extent necessary to comply with our legal obligations (for example, if we are required to retain your data to comply with applicable laws), resolve disputes, and enforce our legal agreements and policies.
            <p>The Company will also retain Usage Data for internal analysis purposes. Usage Data is generally retained for a shorter period of time, except when this data is used to strengthen the security or to improve the functionality of Our Service, or We are legally obligated to retain this data for longer time periods.<h2
            id=transfer-of-your-personal-data>Transfer of Your Personal Data</h2><p>
            Your information, including Personal Data, is processed at the Company\'s operating offices and in any other places where the parties involved in the processing are located. It means that this information may be transferred to — and maintained on — computers located outside of Your state, province, country or other governmental jurisdiction where the data protection laws may differ than those from Your jurisdiction.
            <p>Your consent to this Privacy Policy followed by Your submission of such information represents Your agreement to that transfer.<p>
            The Company will take all steps reasonably necessary to ensure that Your data is treated securely and in accordance with this Privacy Policy and no transfer of Your Personal Data will take place to an organization or a country unless there are adequate controls in place including the security of Your data and other personal information.<h3
            id=disclosure-of-your-personal-data>Disclosure of Your Personal Data</h3><h4 id=business-transactions>Business Transactions</h4><p>
            If the Company is involved in a merger, acquisition or asset sale, Your Personal Data may be transferred. We will provide notice before Your Personal Data is transferred and becomes subject to a different Privacy Policy.<h4 id=law-enforcement>Law enforcement</h4><p>
            Under certain circumstances, the Company may be required to disclose Your Personal Data if required to do so by law or in response to valid requests by public authorities (e.g. a court or a government agency).<h4 id=other-legal-requirements>Other legal requirements</h4><p>
            The Company may disclose Your Personal Data in the good faith belief that such action is necessary to:<ul><li>Comply with a legal obligation<li>Protect and defend the rights or property of the Company<li>Prevent or investigate possible wrongdoing in connection with the Service<li>Protect the personal safety of Users of the Service or the public
            <li>Protect against legal liability</ul><h3 id=security-of-your-personal-data>Security of Your Personal Data</h3><p>
            The security of Your Personal Data is important to Us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While We strive to use commercially acceptable means to protect Your Personal Data, We cannot guarantee its absolute security.<h2 id=childrens-privacy>Children\'s Privacy</h2><p>
            Our Service does not address anyone under the age of 13. We do not knowingly collect personally identifiable information from anyone under the age of 13. If You are a parent or guardian and You are aware that Your child has provided Us with Personal Data, please contact Us. If We become aware that We have collected Personal Data from anyone under the age of 13 without verification of parental consent, We take steps to remove that information from Our servers.
            <p>If We need to rely on consent as a legal basis for processing Your information and Your country requires consent from a parent, We may require Your parent\'s consent before We collect and use that information.<h2 id=links-to-other-websites>Links to Other Websites</h2><p>
            Our Service may contain links to other websites that are not operated by Us. If You click on a third party link, You will be directed to that third party\'s site. We strongly advise You to review the Privacy Policy of every site You visit.<p>
            We have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services.<h2 id=changes-to-this-privacy-policy>Changes to this Privacy Policy</h2><p>We may update Our Privacy Policy from time to time. We will notify You of any changes by posting the new Privacy Policy on this page.<p>
            We will let You know via email and/or a prominent notice on Our Service, prior to the change becoming effective and update the "Last updated" date at the top of this Privacy Policy.<p>You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.<h2
            id=contact-us>Contact Us</h2><p>If you have any questions about this Privacy Policy, You can contact us:<ul><li>By email: privacy@surf.test</ul>',
            'image' => null,
            'slug' => 'privacy',
            'meta_description' => sprintf('%s Privacy Policy', config('app.name')),
            'meta_keywords' => 'Privacy, Policy',
            'status' => Page::STATUS_ACTIVE,
        ]);

        Page::create([
            'author_id' => 1,
            'title' => 'Terms and Conditions',
            'excerpt' => 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.',
            'body' => '<p>Last updated: May 19, 2022<p>This Terms and Conditions agreement has been created with the help of the <a href=https://www.freeprivacypolicy.com/free-terms-and-conditions-generator/ >Terms and Conditions Generator</a>. And is thus an example, and not to be taken as legal advice! Update this page with your own <strong>LEGAL</strong>
            terms and conditions.<p>Please read these terms and conditions carefully before using Our Service.<h2 id=interpretation-and-definitions>Interpretation and Definitions</h2><h3 id=interpretation>Interpretation</h3><p>
           The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.<h3 id=definitions>Definitions</h3><p>For the purposes of these Terms and Conditions:<ul><li><p><strong>Affiliate</strong>
            means an entity that controls, is controlled by or is under common control with a party, where "control" means ownership of 50% or more of the shares, equity interest or other securities entitled to vote for election of directors or other managing authority.<li><p><strong>Country</strong> refers to: Foosha Village, East Blue<li><p><strong>Company
           </strong> (referred to as either "the Company", "We", "Us" or "Our" in this Agreement) refers to Surf LLC, Foosha Village, East Blue.<li><p><strong>Device</strong> means any device that can access the Service such as a computer, a cellphone or a digital tablet.<li><p><strong>Service</strong> refers to the Website.<li><p><strong>
           Terms and Conditions</strong> (also referred as "Terms") mean these Terms and Conditions that form the entire agreement between You and the Company regarding the use of the Service.<li><p><strong>Third-party Social Media Service</strong>
            means any services or content (including data, information, products or services) provided by a third-party that may be displayed, included or made available by the Service.<li><p><strong>Website</strong> refers to Surf, accessible from <a href=http://surf.test>http://surf.test</a><li><p><strong>You</strong>
            means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</ul><h2 id=acknowledgment>Acknowledgment</h2><p>
           These are the Terms and Conditions governing the use of this Service and the agreement that operates between You and the Company. These Terms and Conditions set out the rights and obligations of all users regarding the use of the Service.<p>
           Your access to and use of the Service is conditioned on Your acceptance of and compliance with these Terms and Conditions. These Terms and Conditions apply to all visitors, users and others who access or use the Service.<p>
           By accessing or using the Service You agree to be bound by these Terms and Conditions. If You disagree with any part of these Terms and Conditions then You may not access the Service.<p>You represent that you are over the age of 18. The Company does not permit those under 18 to use the Service.<p>
           Your access to and use of the Service is also conditioned on Your acceptance of and compliance with the Privacy Policy of the Company. Our Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your personal information when You use the Application or the Website and tells You about Your privacy rights and how the law protects You. Please read Our Privacy Policy carefully before using Our Service.
           <h2 id=links-to-other-websites>Links to Other Websites</h2><p>Our Service may contain links to third-party web sites or services that are not owned or controlled by the Company.<p>
           The Company has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that the Company shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with the use of or reliance on any such content, goods or services available on or through any such web sites or services.
           <p>We strongly advise You to read the terms and conditions and privacy policies of any third-party web sites or services that You visit.<h2 id=termination>Termination</h2><p>
           We may terminate or suspend Your access immediately, without prior notice or liability, for any reason whatsoever, including without limitation if You breach these Terms and Conditions.<p>Upon termination, Your right to use the Service will cease immediately.<h2 id=limitation-of-liability>Limitation of Liability</h2><p>
           Notwithstanding any damages that You might incur, the entire liability of the Company and any of its suppliers under any provision of this Terms and Your exclusive remedy for all of the foregoing shall be limited to the amount actually paid by You through the Service or 100 USD if You haven\'t purchased anything through the Service.<p>
           To the maximum extent permitted by applicable law, in no event shall the Company or its suppliers be liable for any special, incidental, indirect, or consequential damages whatsoever (including, but not limited to, damages for loss of profits, loss of data or other information, for business interruption, for personal injury, loss of privacy arising out of or in any way related to the use of or inability to use the Service, third-party software and/or third-party hardware used with the Service, or otherwise in connection with any provision of this Terms), even if the Company or any supplier has been advised of the possibility of such damages and even if the remedy fails of its essential purpose.
           <p>Some states do not allow the exclusion of implied warranties or limitation of liability for incidental or consequential damages, which means that some of the above limitations may not apply. In these states, each party\'s liability will be limited to the greatest extent permitted by law.<h2 id=as-is-and-as-available-disclaimer>
           "AS IS" and "AS AVAILABLE" Disclaimer</h2><p>
           The Service is provided to You "AS IS" and "AS AVAILABLE" and with all faults and defects without warranty of any kind. To the maximum extent permitted under applicable law, the Company, on its own behalf and on behalf of its Affiliates and its and their respective licensors and service providers, expressly disclaims all warranties, whether express, implied, statutory or otherwise, with respect to the Service, including all implied warranties of merchantability, fitness for a particular purpose, title and non-infringement, and warranties that may arise out of course of dealing, course of performance, usage or trade practice. Without limitation to the foregoing, the Company provides no warranty or undertaking, and makes no representation of any kind that the Service will meet Your requirements, achieve any intended results, be compatible or work with any other software, applications, systems or services, operate without interruption, meet any performance or reliability standards or be error free or that any errors or defects can or will be corrected.
           <p>
           Without limiting the foregoing, neither the Company nor any of the company\'s provider makes any representation or warranty of any kind, express or implied: (i) as to the operation or availability of the Service, or the information, content, and materials or products included thereon; (ii) that the Service will be uninterrupted or error-free; (iii) as to the accuracy, reliability, or currency of any information or content provided through the Service; or (iv) that the Service, its servers, the content, or e-mails sent from or on behalf of the Company are free of viruses, scripts, trojan horses, worms, malware, timebombs or other harmful components.
           <p>
           Some jurisdictions do not allow the exclusion of certain types of warranties or limitations on applicable statutory rights of a consumer, so some or all of the above exclusions and limitations may not apply to You. But in such a case the exclusions and limitations set forth in this section shall be applied to the greatest extent enforceable under applicable law.
           <h2 id=governing-law>Governing Law</h2><p>The laws of the Country, excluding its conflicts of law rules, shall govern this Terms and Your use of the Service. Your use of the Application may also be subject to other local, state, national, or international laws.<h2 id=disputes-resolution>Disputes Resolution</h2><p>
           If You have any concern or dispute about the Service, You agree to first try to resolve the dispute informally by contacting the Company.<h2 id=for-european-union-eu-users>For European Union (EU) Users</h2><p>If You are a European Union consumer, you will benefit from any mandatory provisions of the law of the country in which you are resident in.
           <h2 id=united-states-legal-compliance>United States Legal Compliance</h2><p>
           You represent and warrant that (i) You are not located in a country that is subject to the United States government embargo, or that has been designated by the United States government as a "terrorist supporting" country, and (ii) You are not listed on any United States government list of prohibited or restricted parties.<h2
           id=severability-and-waiver>Severability and Waiver</h2><h3 id=severability>Severability</h3><p>
           If any provision of these Terms is held to be unenforceable or invalid, such provision will be changed and interpreted to accomplish the objectives of such provision to the greatest extent possible under applicable law and the remaining provisions will continue in full force and effect.<h3 id=waiver>Waiver</h3><p>
           Except as provided herein, the failure to exercise a right or to require performance of an obligation under these Terms shall not effect a party\'s ability to exercise such right or require such performance at any time thereafter nor shall the waiver of a breach constitute a waiver of any subsequent breach.<h2 id=translation-interpretation>
           Translation Interpretation</h2><p>These Terms and Conditions may have been translated if We have made them available to You on our Service. You agree that the original English text shall prevail in the case of a dispute.<h2 id=changes-to-these-terms-and-conditions>Changes to These Terms and Conditions</h2><p>
           We reserve the right, at Our sole discretion, to modify or replace these Terms at any time. If a revision is material We will make reasonable efforts to provide at least 30 days\' notice prior to any new terms taking effect. What constitutes a material change will be determined at Our sole discretion.<p>
           By continuing to access or use Our Service after those revisions become effective, You agree to be bound by the revised terms. If You do not agree to the new terms, in whole or in part, please stop using the website and the Service.<h2 id=contact-us>Contact Us</h2><p>If you have any questions about these Terms and Conditions, You can contact us:
           <ul><li>By email: terms@surf.test</ul>',
            'image' => null,
            'slug' => 'terms',
            'meta_description' => sprintf('%s Terms and Conditions', config('app.name')),
            'meta_keywords' => 'Terms, Conditions, ToC',
            'status' => Page::STATUS_ACTIVE,
        ]);
    }
}
