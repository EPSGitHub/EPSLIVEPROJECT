    @extends('frontend.layout.app')

    @section('title')
   Privacy Policy | EPS
    @endsection


    @section('maincontent')

	<!-- // Start Code From Here -->


	<!-- page header start -->
	<div class="container ">
        <div class="row">
            <div class="col-md-12  front_banner bnpagehead ">
                <h1>@lang('privacy.heading1')</h1>
                <h5>@lang('privacy.heading2f') <span>@lang('privacy.heading2l')</span> </h5>
                <p><a href="{{ route('fontend.home') }}">@lang('privacy.breadcumFirstlink')</a> / @lang('privacy.breadcumSecondlink')</span>
            </div>
        </div>
    </div>
	<!-- page header END -->

	<section>

		<div class="container" style="text-align: justify">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10 privacy ">
					<h3>PRIVACY POLICY</h3>
					<p>Easy Payment System (“EPS”, “we”, “our” or “us”) recognizes the importance of protecting personal details and information and provides this Privacy Policy with respect to the access and use (direct or indirect) of www.eps.com.bd (“Services”). For the purpose of this Privacy Policy, the user of Services may be merchants/sellers/billers, customers/buyers/consumers, or any other persons using Services (“User”, “you” or “your”). This Privacy Policy will help you understand our policies and procedures regarding the collection, handling and use of your information.

					</p>

                    <p>
                        By using our Services through the Sites, you signify your assent to this Privacy Policy and consent to the processing of your Information (Personal Information and/or Sensitive Personal Data or Information). If you do not agree with this Privacy Policy, do not, in any manner, use our Services, install and/or use the mobile application.

                    </p>

                    <p>Depending on the context, “you” means End Customer, End User, Representative or Visitor:
                    </p>
                    <ul>
                        <li> <b>• </b>When you directly use an End User Service (such as when you sign up for Linking, or make a payment to EPS in your personal capacity), for your personal use, we refer to you as an “End User.”
                        </li>

                        <li><b>• </b>When you do business with, or otherwise transact with a Business User (typically a merchant using EPS, e.g., when you buy anything from a merchant that uses EPS for payment processing) but are not directly doing business with EPS, we refer to you as an “End Customer.”
                        </li>
                        <li><b>• </b>When you are acting on behalf of an existing or potential Business User (e.g., you are a founder of a company, or administering an account for a merchant who is a Business User), we refer to you as a “Representative.” </li>
                        <li><b>• </b>When you visit a Site without being logged into EPS account or otherwise communicate with EPS, we refer to you as a “Visitor” (e.g., you send EPS a message asking for more information because you are considering being a user of our products).
                        </li>
                    </ul>


					<h4 style="margin-top:35px">Information Collection</h4>
					<p>This Privacy Policy covers our treatment of your Information collected from (i) Merchants/Sub-Merchants who use or may want to use our payment gateway services; and/or (ii) consumer information that we acquire in the course of our business.
					</p>


                    <p>As a merchant/sub-merchant, we collect your Information through the registration process, the service agreement that we execute and various submitted documents of your creditability that are required from time to time. We may ask customers to enter personal data when placing an order, such as name, address, phone number, credit card/banking details and e-mail address and use this data to protect the merchants and ourselves against risk.
                    </p>

                    <p>As a customer we capture your Profiling Information, Correspondence Information, Domain Name from which you contact us, the pages you request, the products you buy, the referring site, and the time that you spend on the site. For everyone who visits any of our merchant’s website/purchase page, we log into IP addresses, the type of operating system that your computer uses, and the type of browser software used by you. Further, we may also capture your Service Usage and
                     Transactional Information; one-time passwords if you have consented for it; Correspondence Information; Cookies, etc.
                    </p>

                    <p>We use cookies on our website. Insofar as those cookies are not strictly necessary for the provision of our website and services, we will ask you to consent to our use of cookies when you first visit our website. </p>


                    <h4>Collecting and Using Your Personal Data</h4>
                    <p style="font-weight: 700">Types of Data Collected</p>
                    <p style="font-weight: 600">Personal Data</p>
                    <p>While using Our Service or Primarily sign up in to our account, we may ask you to provide us with certain personally identifiable information that can be used to contact or identify you. Personally identifiable information may include, but is not limited to:
                    </p>
                    <ul>
                        <li> <b>• </b> Email address</li>
                        <li> <b>• </b> First name and last name</li>
                        <li> <b>• </b> Phone number</li>
                        <li> <b>• </b> Address, Postal code, City</li>
                    </ul>

                    <p>Upon successful log in to EPS-EASY PAYMENT SYSTEM account, You are, as a EPS-EASY PAYMENT SYSTEM user, need to enter Your credential information, which may include, but is not limited to:
                    </p>

                    <ul>
                        <li> <b>• </b> Bank Information</li>
                        <li> <b>• </b> National Identification Number along with the still picture of it
                        </li>
                        <li> <b>• </b> Picture</li>
                        <li> <b>• </b> Tax Identification Number </li>
                    </ul>
                    <p>In case of Company, additional documents may require to produce as per the wanting of the Bank for making the transaction. </p>

                    <h4>Personal Data That We Collect About End Users</h4>
                    <p> <span style="font-weight: 500">END USERS (Personal):</span> EPS offers you the opportunity to store your payment methods with EPS so that you can conveniently use it across merchants who are our Business Users – we call this “Remember Me”. When you opt in to “Remember Me”, you agree to let us store your payment method so that you can more readily make purchases through the Link with Business Users of our payment processing Business Services (e.g., name, card number, cvc, and expiration date). When you choose to pay with Link, we will also collect your Transaction Data.
                    </p>

                    <p> <span style="font-weight: 500">END CUSTOMERS (Business Users):</span> EPS offers Business Services to our Business Users (e.g., in-person checkout or online checkout). When we are acting as a Business User’s service provider (or data processor), we will process Personal Data in accordance with the terms of our agreement with the Business User and the Business User’s lawful instructions. For example, we process payment transactions for a Business User because you bought a product from them. Business Users are responsible for making sure
                        that their End Customer’s privacy rights are respected, including ensuring appropriate disclosures about data collection and use that happens in connection with their services. If you are an End Customer (e.g., a purchaser of a product at an online Business User site), please refer to the privacy policy or notice of the Business User for information regarding the Business User’s privacy practices, choices and controls, or contact the Business User directly.</p>



                    <h4>Visitors (E.G. Visitors to EPS Who Are Not an End User, End Customer) </h4>
                    <p>When you visit our Sites, we generally receive your Personal Data either from you providing it to us or through our use of cookies and similar technologies. See our <a href="{{ route('frontend.cookie') }}" style="text-decoration: underline">Cookie Policy</a>
                    </p>
                    <ul>
                        <li><strong>• Forms.</strong>  When you choose to fill in a form on the Site or on third party websites featuring our advertising (e.g., LinkedIn or Facebook, Instagram, Twitter etc.), we will collect the information included in the form, usually your contact information and other information about your question related to our Services.
                        </li>
                    </ul>


                    <h4 style="margin-top: 35px">Other Mode of Collection of Data</h4>
                    <p>In addition to the ways we collect, use and share Personal Data that are described above, we also process your Personal Data as follows.</p>

                    <p>Usage Data is collected automatically when using the Service. Usage Data may include information such as Your Device's Internet Protocol address (e.g., IP address), browser type, browser version, the pages of our Service that you visit, the time and date of Your visit, the time spent on those pages, unique device identifiers and other diagnostic data.
                    </p>

                    <p>When You access the Service by or through a mobile device, We may collect certain information automatically, including, but not limited to, the type of mobile device You use, Your mobile device unique ID, the IP address of Your mobile device, Your mobile operating system, the type of mobile Internet browser You use, unique device identifiers, geo-location information, computer and connection information, statistics on page views, traffic to and from the sites, ad data, IP address, information collected by cookies, other tracking technologies, standard web log information and other identifying information about the computer or device that you use to access your EPS-EASY PAYMENT SYSTEM account shall be tracked for helping us detect possible instances of unauthorized transactions and shall be used by EPS-EASY PAYMENT SYSTEM to provide smooth experience of EPS-EASY PAYMENT SYSTEM services.
                    </p>

                    <h4>Personal Data Collection</h4>

                    <p><b>• Online Activity</b> Depending on the Service you use and the Business Users’ implementation of our Business Services, we will collect information about:
                    </p>
                    <ul>

                        <li style="list-style: circle">Devices and browsers across our Sites and third-party websites, apps and other online services (“Third-Party Sites”), </li>
                        <li style="list-style: circle"> Usage data associated with those devices and browsers, including IP address, plug-ins, language used, time spent on Sites and Third-Party Sites, pages visited, links
                            clicked, and the pages that led or referred you to Sites and Third-Party Sites. For example, activity indicators, like mouse activity indicators help us detect fraud.
                        </li>
                    </ul>
                    <p>We may also collect information that your browser sends whenever you visit our Service or when you access the Service by or through a mobile device.
                    </p>

                    <h4>Purpose</h4>

                    <p>We respect your privacy and want to promote trust and confidence on the internet. As such, we feel it is necessary to disclose to you what information this site collects and tracks and what we do with the information that we collect. We collect and use your Information to send you updates, to improve our Services, to improve user experiences, for quicker transactions, for risk checks, for strengthening our security checks, for analysis and for offering you new features in the existing services you are availing or offering altogether new product/service which may be relevant for you. It is clarified that the Information of Users which has been collected by us or provided to us, is the property of EPS and we may use it, in whole or in part, in our sole discretion and without any compensation to you, for any legitimate purpose and you hereby confirm that you have no objection to the aforesaid use of your Information.
                    </p>

                    <p>EPS-EASY PAYMENT SYSTEM shall not rent or sell your information to third parties for their marketing purposes without your unambiguous consent. But by accepting the instant agreement, you are permitting us to use tour information for marketing purpose. In case, for rendering your service request, we need to convey your information to any third party, we shall share the required information under strict restriction following this Agreement. If you use third party website to access the Platform, you shall be responsible for reviewing the privacy policy statements of those websites. EPS-EASY PAYMENT SYSTEM shall not be responsible for the privacy practice of any third parties. However, we collect your information for the following but not limited to:
                    </p>

                    <h4>Communication and Engagement Information </h4>

                    <p>We will collect any information you choose to provide to us, for example, through support tickets, emails or social media. When you respond to EPS emails or surveys, we collect your email address, name and any other information you choose to include in the body of your email or responses. If you contact us by phone, we will collect the phone number you use to call EPS, as well as other information you may provide during the call. We will also collect your engagement data such as your registration for, attendance of, or viewing of EPS events and other interaction with EPS personnel.</p>


                   <h4>Personal Data Usage</h4>
                   <p>In addition to the ways described above in which we use Personal Data, we use Personal Data in the following ways:</p>
                   <ul>
                    <li style="list-style: disc">
                        <b>Improving and Developing our Services.</b> We use analytics on our Sites to help us analyze your use of our Sites and Services and diagnose technical issues. To learn more about the cookies that may be served through our Sites and how you can control our use of cookies
                        and third-party analytics, please see our Cookie Policy. We also collect and process Personal Data through our different Services, whether you are an End User, End Customer, or Visitor, to improve our Services, develop new Services and support our efforts to make our Services more relevant and more useful to you.

                    </li>

                    <li style="list-style: disc">
                        <b>Communications. </b>We will use the contact information we have about you to perform the Services, which may include sending codes via SMS to authenticate you. If you are an End User or Visitor, we may communicate with you using the contact information we have about you (e.g., using email, phone, text message) to provide information about our Services and our affiliates’ services, invite you to participate in our events or surveys, or otherwise communicate with you for our marketing purposes, provided that we do so in accordance with applicable law, including any consent or opt-out requirements. For example, when you submit your contact information to us or when we collect your business contact details through our participation at trade shows or other events, we may use the information to follow-up with you regarding an event, send you information that you have requested on our products and services and include you on our marketing information campaigns.



                    </li>

                    <li style="list-style: disc">
                        <b>SOCIAL MEDIA AND PROMOTIONS.</b> If you choose to submit Personal Data to us to participate in an offer, program or promotion, we will use the Personal Data you submit to administer the offer, program or promotion. Based on your permission or opt-out, we will also use that Personal Data and Personal Data you make available on social media to market to you.


                    </li>
                    <li style="list-style: disc">
                        <b>FRAUD PREVENTION AND SECURITY.</b> We collect and use Personal Data to help us to detect and manage the activity of fraudulent and other bad actors across our Services, to enable our fraud detection Business Services, and to otherwise seek to secure our Services and transactions against unauthorized access, use, modification or misappropriation of Personal Data, information and funds. In connection with fraud and security monitoring, prevention, detection, and compliance activities for EPS and its Business Users, we receive information from service providers, third parties, and the Services we provide. We may collect information from you, and about you, from Business Users, financial parties and in some cases third parties. For example, to protect our Services, we may receive information from third parties about IP addresses that malicious actors have compromised. This Personal Data (e.g., name, address, phone number, country) helps us to confirm identities, run credit checks subject to applicable law and prevent fraud. We may also use technology to assess the fraud risk associated with an attempted transaction by an End Customer or End User with a Business User or financial partner.


                    </li>
                    <li style="list-style: disc;margin-bottom:5%">
                        <b>COMPLIANCE WITH LEGAL OBLIGATIONS.</b> We use Personal Data to meet our contractual and legal obligations related to anti-money laundering, Know-Your-Customer ("KYC") laws, anti-terrorism, export control and prohibitions on doing business with restricted persons or in certain business areas, and other legal obligations. We strive to make our Services safe, secure and compliant, and the collection and use of Personal Data is critical to this effort. For example, we may monitor patterns of payment transactions and
                        other online signals and use those insights to reduce the risk of fraud, money laundering and other activity that is harmful to EPS, our End Users and their End Customers.


                    </li>

                   </ul>

                   <h4>Disclosure</h4>
                   <p>Information security is critical to our business. We work to protect the security of your information during transmission which encrypts information you input. We store information gathered on secure computers. We use advanced security technology to prevent our computers from being accessed by unauthorized persons. It is important for you to protect against unauthorized access to your Login ID/password and to your computer. Be sure to protect the password used to access our services.
                </p>

                <p>We use reasonable precautions to keep the personal information disclosed to us secure and do not disclose this information to other individuals or organizations unless required for provision of Services to you such as to banks, card associations, merchants. However, we will exchange information with other companies and organizations for the purposes of fraud protection and risk reduction. You acknowledge and agree that for the purpose of sending you updates/ communications, improving product, personalization, offering new features in the existing services you are availing, offering new products/ services which may be relevant for you and Service efficiency, we may, under controlled and secure circumstances, share your Information with our affiliates, associates or third parties with whom we have an legal arrangement in place.
                </p>

                <p>We may disclose your Information pursuant to applicable laws, a directive or order of a government entity or statutory authority or any judicial or regulatory authority or to law enforcement agencies in any official investigation including but not limited to cyber incidents, prosecution and punishment of offences. You agree that EPS has the right to monitor and to disclose Information as may be necessary to satisfy any law, regulation or other governmental request. We may transfer Your Information or other information collected, stored, processed by EPS to any other entity or organization located in Bangladesh or outside Bangladesh only in case it is necessary for providing Services to You in connection with Application. We will cooperate with the appropriate law enforcement authorities in investigating claims of illegal activity.
                </p>

                <p>We will only disclose your Information in accordance with this Privacy Policy. If we want to use it for any other purpose, we will obtain your consent.
                </p>

                <p>If you decline to submit Information to us, then we will unfortunately not be in a position to provide the Services to you.
                </p>

                <h4>Security</h4>
                <p>We work to protect the security of your Information during transmission by using appropriate software, which encrypts information you input. This encrypted information is stored on secure systems/computers. We use advanced security technology to prevent our computers from being accessed by unauthorized persons.
                </p>
                <p>We have also implemented information security practices and standards and have in place information security programs and policies containing managerial, technical, operational and physical security measures that are in compliance with the applicable laws of Bangladesh including, so as to protect the your Information with us from unauthorized access, use, modification, damage, disclosure or impairment.
                </p>

                <p>However, no data transmission over the internet is fully secure, so we cannot ensure or warrant the security of any information you submit to us. Further, we do not guarantee in any way, the security of any Information that you transmit or share on the Site; and you do so at your own risk.
                </p>

                <p>We urge you to keep your Information confidential and not share it with anyone unless necessary. Any of your information which you provide when you use our Services to an open, public environment or forum including (without limitation) any blog, chat room, community, classifieds or discussion board, (a) will not be considered confidential, (b) will not be considered as Personal Information, and (c) is not subject to protection under this Privacy Policy. Since such public environments are accessible by third parties, it is possible that third parties may collect or use such information for their own purposes. In the case of abuse or breach of security, we are not responsible for any breach of security or for any actions of any third parties which receive the information illegally. We will not distribute customer information to be used in mailing lists, surveys, or any other purpose other than what is required to perform our services.
                </p>

                <h4>Changes to the Privacy Policy</h4>
                <p>EPS reserves the right to change, modify, add, or remove portions of this Privacy Policy & Cookie Policy at any time for any reason. In case, any changes are made in the Privacy & Cookie Policy, EPS shall update the same on the website or application as necessary. Users should periodically review this page for the latest information on our privacy practices. Once posted, those changes are effective immediately, unless stated otherwise. Continued access or use of the Services constitutes your acceptance of the changes and the amended Privacy & Cookie Policy. However, if you do not agree with the changes, please do not continue to use the Services or submit Personal Information to us.
                </p>

                <h4>Changes to your Information</h4>
                <p>If you (i.e., our Merchant) would like to view the information we have collected from you and your customers or you want to correct your information or the billing/shipping details of your customers or their IP addresses, please go to Merchant Login page and log into your account to view the above details and to review your Information. If you have questions or suggestions, we can be reached by email at <span style="font-size:15px;font-weight:600;line-height:20px;text-transform:lowercase">support@eps.com.bd<span> .
                </p>

                <p>If you are a customer, and would like to view the information we have collected from you or you want to correct your information or details, please send us your request by email on <span style="font-size:15px;font-weight:600;line-height:20px;text-transform:lowercase">support@eps.com.bd<span>.</p>

                    <p>The User can at any time withdraw his/her consent given previously to EPS for collecting, receiving, possessing, storing, dealing or handling Information of the User, by sending us your
                        request by email on <span style="font-size:15px;text-transform:lowercase">support@eps.bd.com </span> In such case, EPS will unfortunately not be in a position to provide the Services to you. However, EPS will be able to retain such Information for the time period in accordance with the applicable laws.</p>


                    <h4>Jurisdiction</h4>
                    <p>As EPS is fully commence their operation at Bangladesh and obtained its license from Bangladesh, all dispute in relation to the Privacy & Cookie Policy shall be governed by laws of Bangladesh. </p>

                    <h4>Disclaimer</h4>
                    <p>We reserve the right to report any illegal activity by any User, that is, our Merchants or their customers to law enforcement for prosecution. Please be aware that we do not control the acts of our Sub-Merchants, customers or visitors.
                    </p>

                    <p>Contacting EPS Please feel free contact us at contact@eps.bd.com to highlight any issues that you may be facing or require any information/assistance from us. In case you have any grievance relating to the collecting, receiving, possessing, storing, dealing or handling of Personal Information provided by you, you may contact our physical customer care or through the Customer care number i.e., 09614-770066.
                    </p>

                    <h4>Languages</h4>
                    </p>

                    <p>This policy has been drafted in English & Bangla language. In case of any inconsistencies between both versions, the English version will prevail and will be considered an original.
                    </p>



				</div>
				<div class="col-md-1"></div>
			</div>



	</section>







	<!-- // Start Social Icon -->

	@include('frontend.layout.social')


	<!-- // End Social Icon -->



@endsection
