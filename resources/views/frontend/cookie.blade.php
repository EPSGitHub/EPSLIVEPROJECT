
   @extends('frontend.layout.app')

   @section('title')
   Cookie | EPS
   @endsection


   @section('maincontent')

	<!-- // Start Code From Here -->

	<!-- front Banner Start  -->

	<div class="container ">
        <div class="row">
            <div class="col-md-12  front_banner bnpagehead ">
                <h1>@lang('cookie.heading1')</h1>
                <h5>@lang('cookie.heading2f') <span>@lang('cookie.heading2l')</span> </h5>
                <p><a href="{{ route('fontend.home') }}">@lang('cookie.breadcumFirstlink')</a> / @lang('cookie.breadcumSecondlink')</span>
            </div>
        </div>
    </div>


	<!-- front Banner End -->



	<section id="cookie">

		<div class="container" style="text-align: justify">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<h3>COOKIE POLICY</h3>
					<p>This page explains how EPS (Easy Payment System) (referred to in this document as “EPS”, “we”, or “our”) uses cookies and similar technologies on our website and application. It lists cookies that are or may be set in your web browser when visiting the website, why we use these cookies, and your rights and options in controlling the use of the cookies.
					</p>

					<h4>What are Cookies?</h4>

					<p>Cookies are small snippets of text that are placed on your device when you visit a website. Cookies are widely used by websites around the world in order to make their websites work, or to work more efficiently, or to report on the success of advertising initiatives, or to serve ads that users may actually be interested in.
                    </p>
					<p>Cookies set by the website owner (in this case, EPS) are called “first party”. Cookies set by parties other than the website owner are “third party cookies”. Third party cookies enable third party features or functionality to be provided on or through the website – for example, if you click a paid advertisement served by Google, a Google cookie may help us determine the effectiveness of said advertisement.

					</p>

                    <h4>Does EPS use Cookies?</h4>
                    <p>Yes. We use cookies in accordance with our Privacy Policy to:</p>
                    <ul>
                        <li>ensure that our Services function properly, </li>
                        <li>detect and prevent fraud, </li>
                        <li>understand how visitors use and engage with our Site, and </li>
                        <li>analyze and improve Services. </li>
                    </ul>

                    <h4 style="margin-top:35px">Who sets cookies when I use EPS's Site?</h4>
                    <p>There are two main types of cookies that can be set:</p>
                    <ul>
                        <li>First party cookies: These cookies are placed and read by EPS directly when you use our Services, </li>
                        <li>Third party cookies: These cookies are not set by EPS, but by other companies, like Google or Facebook, for site analytics purposes. See further details below on how to manage these cookies.
                        </li>

                    </ul>

                    <h4 style="margin-top:35px">How we use cookies?</h4>

                    <p>We may use cookies for:</p>

                    <p><span style="font-weight: 600">AUTHENTICATION:</span> When you login in EPS Site or EPS Platform, we use cookies to remember you so you don’t have login each time you left the main page and navigate throughout the EPS Site.
                    </p>
                    <p><span style="font-weight: 600">FRAUD PREVENTION:</span> With help of cookies we can obtain information about security of your device and web browser used to access EPS Site or EPS Platform and to detect harmful or illegal use of EPS Services.

                    </p>
                    <p><span style="font-weight: 600">SETTINGS:</span> We can use cookies to remember your settings of EPS Services so you don’t have to change it each time you access EPS Site or EPS Platform. For example, you can choose to remember payment details and associate it with your device to make recurring payments or use language or font you prefer.
                    </p>


                    <p><span style="font-weight: 600">IMPROVING EPS SERVICES:</span>
                        We use cookies to understand how we can make EPS Site and Services better. Cookies help us to know how people reach EPS Site, detect and gather reporting on bugs, improve functionality and speed of EPS Site and EPS Platform.

                    </p>


                    <p><span style="font-weight: 600">MARKETING:</span>
                        From time to time we can use cookies to show you more relevant ads, e.g. to not show the same ads multiple times or recognize actions across multiple devices or browsers, etc. We reserve the right to use Google Analytics to understand how EPS Site or EPS Platform is used by its users. You can opt out of Google Analytics Advertising Features as described below.

                    </p>

                    <p> For EPS-affiliated websites, you can learn more about cookies by visiting those sites directly. </p>

                    <p>Based on the purpose cookies can be classified to:</p>

                    <p><span style="font-weight: 600">STRICTLY NECESSARY COOKIES </span>
                        - These cookies are essential because they ensure EPS Site and EPS Platform functionality. Without them some parts of our Site or services that you’ve asked for may not be available or provided. Strictly necessary cookies are always enabled.

                    </p>

                    <p><span style="font-weight: 600">PERFORMANCE COOKIES</span>
                        - These cookies help us to understand how people interact with EPS Site and EPS Platform. With performance cookies we can monitor your behavior on the Site, e.g. which web pages you have visited, what is the duration of your visits, which clicks you have made. We use performance cookies for statistics and collect aggregated and anonymized information that allows to make our site and services features better.


                    </p>

                    <p><span style="font-weight: 600">MARKETING COOKIES</span>
                        - These cookies are used to customize advertising of EPS Site, services and products, to manage our advertising campaign and to monitor conversion results. With marketing cookies, we can regulate the number and frequency of EPS advertisements shown to you. They allow to see from which advertisement you have been redirected to our Site. In our advertising campaign we may use third-party technologies and promote EPS on third-party websites via Google services, Facebook, LinkedIn, Instagram etc. These third parties may also place cookies on your device which are not controlled by EPS. To disable such cookies, you need to check cookie policy of relevant third party and follow its opt-out instructions.

                    </p>

                    <h4>Can I opt-out?</h4>
                    <p>Yes. You can opt out of cookies through our Cookie Settings Dashboard, with the exception of those cookies that are necessary to provide you with our Services. For EPS-affiliated websites, you can learn more about cookies by visiting those sites directly. Your web browser may allow you to
                        manage your cookie preferences, including to delete and disable stripe cookies. You can take a look at the help section of your web browser or follow the links below to understand your options. If you choose to disable cookies, some features of our Site or Services may not operate as intended.
                    </p>

                    <ul>
                       <li><a href="https://support.google.com/chrome/answer/95647?hl=en">Chrome</a></li>
                       <li><a href="https://support.microsoft.com/en-us/windows/delete-and-manage-cookies-168dab11-0753-043d-7c16-ede5947fc64d">Explorer</a></li>
                       <li><a href="https://support.apple.com/guide/safari/manage-cookies-sfri11471/mac">Safari</a></li>
                       <li><a href="https://support.mozilla.org/en-US/kb/cookies-information-websites-store-on-your-computer">Firefox</a></li>
                       <li><a href="https://help.opera.com/en/latest/web-preferences/#cookies">Opera</a></li>
                    </ul>

                    <h4 style="margin-top: 35px">How we may update this Cookie Policy?</h4>
                    <p>We may periodically update this Cookie Policy in order to reflect changes in our practices and services. If we make any material changes in the way we collect, use, and/or share information held in cookies, we will notify you by posting notice of the changes on our Site.
                    </p>

                    <h4>Contact us</h4>
                    <p>If you have any questions about our use of cookies or our privacy practices, you can find the most up-to-date contact information in our Privacy Statement located here. </p>





				</div>
				<div class="col-md-1"></div>
			</div>
		</div>


	</section>
















	<!-- // Start Social Icon -->

	@include('frontend.layout.social')


	<!-- // End Social Icon -->


@endsection
