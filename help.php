<div class='content_box'>
<h3>Help</h3>
<p>
    For safety, please keep funds off-site when not trading.
</p>
<p>
    To begin trading, navigate to the <a href="?page=trade">trade
    page</a>, enter your desired amount and click buy. The trade will
    materialise in the orderbook and under your profile. You will not
    be able to view any information from other traders' accounts for
    privacy reasons.
</p>
<p>
    You may cancel an order by viewing the desired order (found under
    your profile). Click "Cancel" to revoke any current orders.
</p>
<p>
    The source code for this website is available online at <a
    href="https://github.com/ChrisC5983/intersango">github</a>. We
    believe hiding the workings of a website is a poor substitute for
    good security.
</p>
</div>

<a id="ticker"></a>
<div class='content_box'>
<h3>Ticker Contents</h3>
<p>
    Every page on the exchange has a header containing information
    about the market, split over a few lines:
    <ul>
    <li><span style="font-weight: bold;">The first line</span> of the
        header shows the following:
        <ul>
        <li><span style="font-weight: bold;">24 hour volume</span> - This
            shows the total volume, in Bitcoins, of trades made on the
            exchange in the last 24 hours.  It's a clickable link which
            takes you to a view of all the trades made in the last 24
            hours.  The trades are anonymous, except for any which you
            were involved in.  For the trades you were involved in, the
            amount you gave will be shown in bold, and that trade will be
            clickable to allow you to see the whole of your side of the
            order in detail.
        <li><span style="font-weight: bold;">date &amp; time</span> - This
            shows the date and time on the exchange server, which is
            configured to use the '<?php echo TIMEZONE; ?>' timezone
            setting.
        </ul>
    <li><span style="font-weight: bold;">The 2nd line</span> 
        is a basic 'ticker' display.  It shows, from left to right:
        <ul>
        <li><span style="font-weight: bold;">buy</span> - This shows the
            highest price per Bitcoin that anyone is currently offering to
            buy at.  It's clickable, and takes you to the 'trade' page
            with the boxes pre-filled to allow you to quickly accept the
            best price(s) on the exchange.  The values which are
            pre-filled when you click the 'buy' link include all available
            'buy' orders which are within 0.001% of the best price.  So if
            someone is offering to buy Bitcoins at $10 each and that's the
            highest price on the exchange, you'll see "buy: 10".  If you
            click that link, you'll be taken to the 'trade' page with
            values pre-filled to match all orders which offer $9.999 or
            more per Bitcoin.
        <li><span style="font-weight: bold;">sell</span> - This shows the
            lowest price per Bitcoin that anyone is currently offering to
            sell at.  It's clickable, and acts in a way completely
            analogous to the 'buy' link described above.
        <li><span style="font-weight: bold;">last</span> - This shows the
            price at which Bitcoins were most recently traded on the
            exchange.
        <li><span style="font-weight: bold;">high</span> - This shows the
            highest price at which a trade occurred in the last 24 hours.
        <li><span style="font-weight: bold;">low</span> - This shows the
            lowest price at which a trade occurred in the last 24 hours.
        <li><span style="font-weight: bold;">avg</span> - This shows the
            <a target="_blank" href="http://en.wikipedia.org/wiki/VWAP">volume-weighted
            average price</a> over the last 24 hours.
        </ul>
    <li><span style="font-weight: bold;">The 3rd line</span> only
        shows up while you are logged in to the exchange.
        <p>
        It shows
        your current balances.  Numbers in brackets after your balance
        indicate funds which you control but which are currently tied
        up in unmatched orders on the orderbook.
        </p>
        <p>
        For example, "46 (+4) BTC" indicates that you have 46 Bitcoins
        available to sell or withdraw, and 4 more which you are
        currently attempting to sell on the orderbook.  Cancelling
        your sell order(s) will make all 50 Bitcoins available to
        you.
        </p>
    <li>Occasionally a <span style="font-weight: bold;">4th line</span> will
        show up, showing important information concerning the running of the
        exchange.
    </ul>
</p>
<p>
</p>
</div>

<a id="two_factor"></a>
<div class='content_box'>
<h3>Security - two factor authentication</h3>
<p>
    Security is always paramount on the web and even more important
    with Bitcoin. The “ease of sending large funds globally”
    unfortunately has the potential to become the “ease of stealing
    large funds globally”. With this in mind <?php echo SITE_NAME; ?>
    set out to find well vetted security measures.
</p>
<p>
    <strong>How this will work for our users:</strong><br />
    For detailed information visit The Google Auth Website <a
    href="http://code.google.com/p/google-authenticator/"
    target="_blank">http://code.google.com/p/google-authenticator/</a>
</p>
<p>
    We are offering Google Authenticator to help our users secure their accounts. 2 
    factor is completely optional, altho highly recomended. You can activate
    this by (clicking Security Use two-factor authentification in the
    right menu panel.) We are busy looking for more methods to help our users secure their account
    but in the meantime Google Auth should work fine for most users.
</p>
<p>
    <strong>Phone App</strong> –
        You will receive a QR code or key string to key into the Google Authenticator App
        it will then give you a numerical string to enter everytime you log in.<br />
</p>
<p>
    The beauty of the system is how quick and simple it is to both
    implement and use. Within minutes you can be up and
    running. A
</p>
<p>
    <strong>What will this enhanced security feature cost the user?</strong><br />
    Absolutely nothing. 
</p>
<p>
    Your feedback is greatly appreciated as always. We would like to
    continue to provide you a safe and trusted place to exchange
    Bitcoins. Questions please email us at <a
    href="mailto:support@ClaudsXchange.com">Support@ClaudsXchange.com</a>
</p> 
</div>

<div class='content_box'>
<h3>Information</h3>
<p>
    <b>We are now accepting deposits from the United States, We hope to add more soon.:</b>
</p>
<p>
    If the bank account you will use to fund your <?php echo SITE_NAME; ?> account
    is in the United States, please feel free to
    deposit to our bank. If your bank account is not in America s, your transfer will be rejected.
</p>
<p>
    We also will be processing withdraws to the United States but only on
    the condition that the user has deposited money before.
</p>
<p>
    Be sure to ask the bank you are sending from if there are any fees
    associated with sending a bank transfer. Also our bank may charge
    fees for accepting your transfer. You are liable for those fees.
</p>
</div>

<div class='content_box'>
<h3>About us</h3>
<p>
    Put Personal Info Here
</p>
<p>
    We Started this project from Source Code from Dooglus who in turn started his work on the code after
    working for the Intersango exchange site.
</p>
<p>
    For information regarding Dooglus and his current Projects please visit some of his pages like the ones below:
    Insert Dooglus info here
</p>
<p>
    <?php echo SITE_NAME; ?> is my decision to provide an exchange to and from CryptoCurrencies.
</p>
</div>

<div class='content_box'>
<?php show_contact_info(); ?>
<p>
    <?php echo SITE_NAME; ?> is currently looking into current Legal Standings. Until then we are operating in a 
    alpha or beta stage and will be charging low or no fees.
</p>
</div>

<div class='content_box'>
<h3>Fees and comissions</h3>
<p>
<?php
if (COMMISSION_PERCENTAGE_FOR_FIAT == 0 && COMMISSION_PERCENTAGE_FOR_BTC == 0)
    echo "All trades are free of commission\n";
else { ?>
    In order to pay for server space, bandwidth, programmers,
    designers, and other costs, <?php echo SITE_NAME; ?> imposes fees on
    every transaction performed by all users of the website, as
    follows:
<?php show_commission_rates();
} ?>
</p>
</div>

<div class='content_box'>
<h3><?php echo CURRENCY; ?> Withdraws</h3>
<p>
    To withdraw funds to any viable American Bank, please provide the correct
    banking information; any incorrect details will result in a <strong>"cancel"</strong>
    status, All funds will be returned to the user's account on the exchange and
    you will be required to re-submit the withdraw.
</p>
</div>

<div class='content_box'>
<h3>Account limits</h3>
<p>
    <strong>Daily Bitcoin transfer limits:</strong> Default Bitcoin
    withdrawal limit is 1 coins per day. This limit is in place to
    protect users in case their account is compromised. If you would
    like to increase this daily Bitcoin withdrawal limit for your
    account, please contact support.
</p>
<p>
    <strong>Daily money transfer limits:</strong> Unlike Bitcoins,
    flow of money is heavily regulated by law. So the maximum amount
    you can transfer is capped at <?php echo CURRENCY; ?> 1000 per day. Withdrawals and
    deposits both count towards this limit.
</p>
<p>
    Default maximum account size limit is <?php echo CURRENCY; ?> 5,000; if you would like
    to raise this limit, please submit a Request to Support and we
    will make decisions on a case by case basis.
</p>
</div>

//Edit The TOS as Needed
<div class='content_box'>
<h3>Terms and conditions</h3>
<p>
    <b>NOTICE.</b> This web site is offered to you conditioned on your
    acceptance without modification of the terms, conditions and
    notices contained herein. Your use of the site constitutes your
    agreement to comply with these terms and conditions.
</p>
<p>
    1. This site is in an early public-alpha state. While problems are
    infrequent, they do occur. We are currently at this stage not
    liable for mistakes which could occur but this will change in the
    future. We will do our best to resolve issues. In no part are we
    liable. To date, no one has reported lost or missing funds which
    were unretrievable.
</p>
<p>
    2. In the case of a dispute between parties, we will not intervene
    to settle the matter. Once an order has been filled, and funds
    appear in the parties' accounts, that trade should be considered
    irrevocable. Trades are irreversible.
</p>
<p>
    3. As login security is handled off-site by your OpenID provider,
    you are responsible for securing and recovering stolen or cracked
    logins.
</p>
<p>
    4. Any attempt at this site's security will be met with immediate
    seizure of involved accounts and funds. Victims of fraud will not
    receive refunds, but are notified and advised on how to prevent
    future problems.
</p>
<p>
    5. We do not claim ownership of any materials you provide to us
    (including feedback and suggestions). However, you are granting us
    and our agents permission to use your submissions in connection
    with the operation of this web site and its other businesses,
    including but not limited to: the right to copy, distribute,
    transmit, publicly display, reproduce and edit your submission all
    without payment of compensation to you or any other person or
    business or entity of any time for any such usage.
</p>
<p>
    6. The information contained on here has no regard to the specific
    investment objective, financial situation or particular needs of
    any specific recipient. We do not endorse any particular financial
    products. Posted content is solely for informational
    purposes. Please consult appropriate professionals for specific
    advice tailored to your situation.
</p>
</div>

//Edit the Privacy Policy as we see fit

<div class='content_box'>
<h3>Privacy policy</h3>

<h4>A. Policy statement</h4>
<p>
    <?php echo SITE_NAME; ?> respects customer privacy. Users can visit most pages
    on our website and use all of the tools located without
    identifying themselves or providing personal or financial
    information. We collect the minimum information needed, which is
    all viewable from your profile. Normally we do not expunge records
    but may decide to on request and after careful consideration. We
    do not store cookies for privacy purposes. Our website may provide
    links to third-party websites for authentication, customer
    convenience and information. We do not control those third-party
    sites or their privacy practices and are not in any way or form
    liable for their content and or services.
</p>

<h4>B. How we use personal information</h4>
<p>
    We may use personal information as necessary to: complete bank
    deposits and withdrawals, effect transactions authorised by the
    user and maintain accounts.
</p>
<p>
    We will not use or disclose any personal information from our
    users to any third parties except as stated in this
    policy. Personal information may be transferred across national
    and state borders for the purposes of data consolidation, storage
    and customer data management.
</p>

<h4>C. Disclosure of personal information</h4>
<p>
    We may disclose personal information of current and former users
    to affiliated and non-affiliated third party entities in the
    following events:
</p>
<p>
    <ul class='list'>
        <li>To business partners performing services on our behalf
              under written agreements restricting their usage of
              personal information. Restrictions are provided for
              limited purposes and to refrain from further use or
              disclosure.</li>
        <li>In the ordinary course of business to our attorneys,
              accountants and auditors.
        <li>To persons holding a legal or beneficial interest relating
              to the customer's account.</li>
        <li>To persons acting in a fiduciary, representative, or
              attorney capacity in relation to an account.</li>
        <li>To protect against actual or potential fraud, unauthorized
              transactions, claims or other liability.</li>
        <li>To government, regulatory or law enforcement agencies to
              the extent permitted or required by law, or to comply with
              applicable legal requirements.</li>
        <li>To comply with civil, criminal or regulatory
              investigations, or judicial process, subpoena, summons or
              warrant by federal, state or local authorities.</li>
    </ul>
</p>

<h4>D. Permission to disclose information</h4>
<p>
    Except as permitted in this policy, we will not share personal
    information about any present or former customer with any
    non-affiliated third party without the customer's prior written
    consent or providing the customer with a clear notice, an
    opportunity to "opt out" of that disclosure, and information on
    how to option out.
</p>

<h4>E. Notification of policy changes</h4>
<p>
    Updates will be posted on our front page with an offer to
    re-review our changes. Our customers will always know what
    information we collect online, how we use it and what choices they
    have.
</p>
<p>
    We value our customers' opinions. Do not hesitate to email us if
    you have comments or questions about our policies. Details may be
    found above.
</p>
</div>
