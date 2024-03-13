<div>
    <div class="addition">
        <div class="pop-outer">
            <div class="pop-bg"></div>
            <div class="pop-inner">
                <div class="pop-close" id="close"></div>
                <div class="pop-inner__in"><!---->

                </div>
            </div>
        </div><!---->
    </div>
</div>
<script src="./Enerya-Gaz_files/main.js.indir"></script>

<script>
    const policybtn = document.getElementById('policy');
    const termsbtn = document.getElementById('terms');
    const closebtn = document.getElementById('close');
    const popup = document.querySelector('.pop-outer');
    const popinner = document.querySelector('.pop-inner__in');

    policybtn.addEventListener('click', (e) => {
        e.preventDefault();
        popup.classList.add('active');
        popinner.innerHTML = `
                 <div class="">
                            <h1 class="terms__title">Privacy Policy</h1>
                            <div class="terms__text">
                                <h2>Introduction</h2>
                                <p class="bigger">We, as the owner of this domain, operate this advertising website
                                    ("Website"), which provides you with information about products or services of our
                                    partner(s) ("Advertiser(s)") and enables you, as the user of this Website, to apply
                                    for
                                    these products or services from the Advertiser on its websites ("Service"). The use
                                    of
                                    the Website and the Service are subject to Website Terms of Use, which are available
                                    at
                                    the Website ("Terms").For use of the Website and/or the Service, we need to process
                                    your
                                    personal data. We issued this Privacy Policy to provide you with detailed
                                    information
                                    about such data processing. </p>
                                <h2> Basic principles of personal data processing </h2>
                                <p> We always respect your privacy and process your personal data fairly, legally and
                                    pursuant to this Privacy Policy and applicable law. In case you are in the European
                                    Union, we process your personal data pursuant to the Regulation (EU) 2016/679 of the
                                    European Parliament and of the Council of 27 April 2016 on the protection of natural
                                    persons with regard to the processing of personal data and on the free movement of
                                    such
                                    data, and repealing Directive 95/46/EC (General Data Protection Regulation;
                                    "GDPR")."
                                </p>
                                <p>We established appropriate technical and organisational measures to avoid any
                                    unauthorized usage or disclosure of personal data to persons, who are not authorized
                                    to
                                    process it and to avoid other kind of breach of security of processed personal data.
                                </p>
                                <p>In case any breach of security of processed personal data occurs, which would mean a
                                    high
                                    risk to your rights and freedoms, we will immediately inform you to your e-mail
                                    address
                                    you gave us.</p>
                                <p>We do not publish your personal data, unless you give us a previous consent to do it.
                                </p>
                                <h2> Personal data we process </h2>
                                <p> We process personal data filled in the registration form available at the Website.
                                    By
                                    sending off a filled registration form we are concluding a contract under which we
                                    provide you with the Service, to process your application to enter into a contract
                                    with
                                    the Advertiser to buy products or services advertised on this Website. </p>
                                <p>Moreover, we process IP address and cookies of the users of our Website. Cookies are
                                    small text files saved in your computer, which help us to make your experience with
                                    the
                                    website better. Each user has a choice to decline the cookies using the settings in
                                    his/her web browser. Limitation of use of the cookies may influence the functioning
                                    of
                                    our website.</p>
                                <p>We consider personal data you gave us to be true, actual and correct. Any harm caused
                                    by
                                    incorrect personal data shall be borne by the person that gave us the respective
                                    data.
                                </p>
                                <h2> Purposes, legal basis and periods of the personal data processing </h2>
                                <p> Processing of your personal data is necessary for the provision of the Service to
                                    you.
                                    For this purpose, we process all personal data you filled in the registration form
                                    or
                                    disclosed to us otherwise. Your personal data will be processed for a period during
                                    which we provide the Service to you in accordance with the Terms. </p>
                                <p>[i18n] Your IP address, e-mail address and information obtained based on the cookies
                                    is
                                    processed for the purpose of sending you newsletters about the products or services
                                    related to this Website as well as newsletters to provide you with information about
                                    commercial opportunities that may be interesting for you. The commercial offers may
                                    be
                                    of the Advertisers as well as of our other business partners. This processing is
                                    based
                                    on your consent (given by marking a checkbox in the registration form). You have a
                                    right
                                    to withdraw your consent free of charge at any time, without affecting the
                                    lawfulness of
                                    processing based on such consent before its withdrawal as well as processing
                                    performed
                                    upon other legal basis than your consent. Your e-mail address for this purpose will
                                    be
                                    processed until you withdraw your consent.</p>
                                <h2> Ways of the processing of the personal data </h2>
                                <p> We process your personal data automatically. Please, be sure, that such is not a
                                    process, that could lead to an individual decision, which could have legal effects
                                    on
                                    you or similarly significantly affects you. </p>
                                <p>Also, we may delegate processing or its part to processors, a provider of mass
                                    mailing
                                    services and a provider of IT services and cloud services. We choose our processors
                                    with
                                    due care, so your personal data are protected at any time of their processing.</p>
                                <p>For the provision of the Service it is essential to disclose your personal data to
                                    the
                                    Advertisers.</p>
                                <p>The Advertisers and processors are recipients of your personal data. The data can be
                                    transferred to any state in the world. The transfer of your personal data to
                                    Advertisers
                                    is necessary for the performance of a contract between us, as specified in the
                                    Terms.
                                    Should we transfer your personal data, we always do such upon the suitable
                                    safeguards
                                    (the recipients are bound to keep appropriate protection etc.), so appropriate
                                    protection of your personal data is ensured.</p>
                                <h2>Data subject rights</h2>
                                <p>Where GDPR is applicable to the processing, you are entitled to exercise following
                                    rights
                                    of the data subject:</p>
                                <ul>
                                    <li>Right of access to personal data (Article 15 of GDPR)</li>
                                    <li>Right to rectification (Article 16 of GDPR)</li>
                                    <li>Right to erasure (Article 17 of GDPR)</li>
                                    <li>Right to restriction of processing (Article 18 of GDPR)</li>
                                    <li>Right to data portability (Article 20 of GDPR)</li>
                                    <li>Right to object (Article 21 of GDPR)</li>
                                    <li>Right not to be subject to a decision based solely on automated processing,
                                        including profiling, which produces legal effects concerning the data subject or
                                        similarly significantly affects the data subject (Article 22 of GDPR)</li>
                                    <li>Right to lodge a complaint with a supervisory authority (Article 77 of GDPR)
                                    </li>
                                </ul>
                                <p></p>
                                <p>Please, note, that in cases we are not obliged to proceed pursuant to the GDPR, we
                                    are
                                    not obliged to comply with abovementioned rights. However, even in such case, we
                                    will do
                                    our best to deal with your complaint, request or inquiry to your satisfaction.</p>
                                <p>Before we start acting upon your request it may be necessary to verify your identity.
                                    This measure is necessary for the protection of your personal data, so we don't
                                    provide
                                    your personal data to a third person. In case you refuse to provide us with
                                    information
                                    allowing us to identify you, we will not be able to process your request.</p>
                                <p>We will answer to your request without undue delay and in any event within one month
                                    of
                                    receipt of the request. In case it will be impossible to handle your request, we
                                    will
                                    inform you in designed period about the prolongation of the period for answer by two
                                    months maximum.</p>
                                <p>We will use electronic means for the communication, e.g. we will reply via e-mail. In
                                    case you prefer other type of communication, please, let us know.</p>
                                <p>We will provide any communication and any action free of charge. However, in case
                                    your
                                    request will be manifestly unfound or excessive (in particular due to its repetitive
                                    character), we may charge you a reasonable fee, taking into account the
                                    administrative
                                    costs related to providing the information or communication or taking the action
                                    requested, or refuse to act on the request.</p>
                                <p>You can exercise your rights, file a complaint or inquiry by contacting us at e-mail
                                    address or correspondence address below.</p>
                                <p>You can file your complaint related to personal data protection to a respective state
                                    body empowered in data protection area, and also to ask for a judicial protection in
                                    case you are of an opinion, that your rights related to data protection were
                                    breached.
                                    Should you need more information about the respective authority of your country, do
                                    not
                                    hesitate to contact us for assistance.</p>
                            </div>
                        </div>
            `
    });
    termsbtn.addEventListener('click', (e) => {
        e.preventDefault();
        popup.classList.add('active');
        popinner.innerHTML = `
                 <div class=""><h1 class="terms__title">Terms of use</h1><div class="terms__text"><h2>General</h2> <p class="bigger"> The <a href="#" onclick="document.location.hash='';return false;" class="termLink"></a> Web Site (the "Site") is an online informational and educational service providedby <span class="termLink">This site</span>, subject to your compliance with the terms and conditions set forth below.</p><p class="bigger">PLEASE READ THIS DOCUMENT CAREFULLY BEFORE ACCESSING OR USING THE SITE. BY ACCESSING ORUSING THE SITE, YOU AGREE TO BE BOUND BY THE TERMS AND CONDITIONS SET FORTH BELOW. IF YOU DO NOT WISH TO BE BOUND BY THESE TERMS AND CONDITIONS, YOU MAY NOT ACCESS OR USE THE SITE.</p><p class="bigger"><span class="termLink">This site</span> may modify this agreement at any time, and such modifications shall be effectiveimmediately upon posting of the modified agreement on the site. you agree to review the agreementperiodically to be aware of such modifications and your continued access or use of the site shall be deemed your conclusive acceptance of the modified agreement. </p><h2> Risk Warning </h2> <p> In spread betting there is a degree of leverage and as such there will be a high level of risk to yourcapital with the possibility of losing more than your initial investment and this will be not suitable for allinvestors.<span class="termLink">This site</span> does not make representations that all customers will achieve similar profits asadvertised on this site. The past performance of our system is not necessarily indicative of futuresmovements. Before subscribing to our information system, and placing any trades, please ensure youfully understand the risks, and seek independent advice if necessary </p><h2> Copyright, Licenses and Idea Submissions </h2> <p> The entire contents of the Site are protected by international copyright and trademark laws. The ownerof the copyrights and trademarks are <span class="termLink">This site</span>, its affiliates or other third party licensors. Youmay not modify, copy, reproduce, republish, upload, post, transmit, or distribute, in any manner, thematerial on the site, including text, graphics, code and/or software. You may print and downloadportions of material from the different areas of the Site solely for your own non-commercial use provided that you agree not to change or delete any copyright or proprietary notices from the materials.You agree to grant to <span class="termLink">This site</span> a non-exclusive, royalty-free, worldwide, perpetual license,with the right to sub-license, to reproduce, distribute, transmit, create derivative works of, publiclydisplay and publicly perform any materials and other information (including, without limitation, ideascontained therein for new or improved products and services) you submit to any public areas of the Site(such as bulletin boards, forums and newsgroups) or by e-mail to <span class="termLink">This site</span> by all means and inany media now known or hereafter developed. You also grant to<span class="termLink">This site</span> the right to useyour name in connection with the submitted materials and other information as well as in connectionwith all advertising, marketing and promotional material relatedthereto. You agree that you shall haveno recourse against <span class="termLink">This site</span> for any alleged or actual infringement or misappropriation ofany proprietary right in your communications to <span class="termLink">This site</span>. </p><h2> Trademarks </h2> <p> Publications, products, content or services referenced herein or on the Site are the exclusive trademarksor servicemarks of <span class="termLink">This site</span>. Other product and company names mentioned in the Site may bethe trademarks of their respective owners. </p><h2> Use of the Site </h2> <p> This service is an informational and educational service only. It is not Individual Advice, or an invitationto trade. To use the system will require you to open an account with an independent provider of suchaccounts. The choice of such accounts is only yours. We are not responsible for charges, advice or theoperation of any such account. Under no circumstance can we or will we give individual advice on themerits or otherwise of any particular trade in any option, bet, security asset or market.You understand that, except for information, products or services clearly identified as beingsupplied by<span class="termLink">This site</span>, <span class="termLink">This site</span> does not operate, control or endorse any information, productsor services on the Internet in any way. Except for <span class="termLink">This site</span> - identified information, productsor services, all information, products and services offered through the Site or on the Internet generallyare offered by third parties, that are not affiliated with <span class="termLink">This site</span>. You also understand that<span class="termLink">This site</span> cannot and does not guarantee or warrant that files available for downloadingthrough the Site will be free of infection or viruses, worms, Trojan horses or other code that manifestcontaminating or destructive properties. You are responsible for implementing sufficient proceduresand checkpoints to satisfy your particular requirements for accuracy of data input and output, and formaintaining a means external to the Site for the reconstruction of any lost data.You assume total responsibility and risk for your use of the site and the internet. <span class="termLink">This site</span>provides the site and related information "as is" and does not make any express or implied warranties,representations or endorsements whatsoever (including without limitation warranties of title or noinfringement, or the implied warranties of merchantability or fitness for a particular purpose) withregard to the service, any merchandise information or service provided through the service or on theinternet generally, and <span class="termLink">This site</span> shall not be liable for any cost or damage arising eitherdirectly or indirectly from any such transaction. It is solely your responsibility to evaluate theaccuracy,completeness and usefulness of all opinions, advice, services, merchandise and other informationprovided through the service or on the internet generally. <span class="termLink">This site</span> does not warrant that theservice will be uninterrupted or error-free or that defects in the service will be corrected. </p><h2> LIMITATION OF LIABILITY </h2><p>In no event will <span class="termLink">This site</span> be liable for (i) any incidental, consequential, or indirect damages(including, but not limited to, damages for loss of profits, business interruption, loss of programs orinformation, and the like) arising out of the use of or inability to use the service, or any information, ortransactions provided on the service, or downloaded from the service, or any delay of suchinformationor service.Even if <span class="termLink">This site</span> or its authorized representatives have been advised of the possibility of suchdamages, or (ii) any claim attributable to errors, omissions, or otherinaccuracies in the service and/ormaterials or information downloaded through the service. Because some states do not allow theexclusion or limitation of liability for consequential or incidental damages,the above limitation may notapply to you. In such states, <span class="termLink">This site</span>'s liability is limited to the greatest extent permitted bylaw. <span class="termLink">This site</span> makes no representations whatsoeverabout any other web site which you mayaccess through this one or which may link to this Site. When you access a non <span class="termLink">This site</span> website, please understand that it is independent from <span class="termLink">This site</span>,and that <span class="termLink">This site</span> hasno control over the content on that web site. In addition, a link to a <span class="termLink">This site</span> web site doesnot mean that <span class="termLink">This site</span> endorses or acceptsany responsibility for the content, or the use, ofsuch web site.</p><h2> Indemnification </h2><p>You agree to indemnify, defend and hold harmless <span class="termLink">This site</span>, its officers, directors, employees,agents, licensors, suppliers and any third party information providers to the Service from and against alllosses, expenses, damages and costs, including reasonable attorneys' fees, resulting from any violationof this Agreement (including negligent or wrongful conduct) by you or any other person accessing theService</p><h2> Third Party Rights </h2><p>The provisions of paragraphs Use of the Site and Indemnification are for the benefit of <span class="termLink">This site</span> and its officers, directors, employees, agents, licensors, suppliers, and any third partyinformation providers to the Service. Each of these individuals or entities shall have the right to assertand enforce those provisions directly against you on its own behalf.</p><h2>Miscellaneous </h2><p>This Agreement shall all be governed and construed in accordance with the laws of the United Kingdomapplicable to agreements made and to be performed in the United Kingdom. Any cause of action orclaimyou may have with respect to the Service must be commenced within one (1) year after the claimor cause of action arises or such claim or cause of action is barred. <span class="termLink">This site</span>'s failure toinsistupon or enforce strict performance of any provision of this Agreement shall not be construed as awaiver of any provision or right. Neither the course of conduct between the parties nortrade practiceshall act to modify any provision of this Agreement. <span class="termLink">This site</span> may assign its rights and dutiesunder this Agreement to any party at any time without noticing you. Any rights notexpressly grantedherein are reserved.</p><h2> Subscription details </h2><p>To become a subscriber, you must be at least 18 years of age and will have to complete the SubscriptionRegistration Form.If you register, you will be required to pay a subscription fee and will be makingcertain promises andagreements and will be legally obligated to observe the terms and conditions of the <span class="termLink">This site</span>website which follow. Please read them together with the Risk Warningand Disclaimer beforecompleting the Subscription Registration Form</p>
                    </div>
                 </div>
            `
    });

    closebtn.addEventListener('click', () => {
        popup.classList.remove('active');
    });
</script>