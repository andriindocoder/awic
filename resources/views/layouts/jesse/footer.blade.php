<div style="width:100%; clear:both;" ></div>

<footer>
    <div class="two_fifth" id="contact">
        <h2>Contact me today!</h2>
        <p>I am available for phone calls and meeting with you in the Toms River, NJ area.<br /><br />Payment plans available for each phase of building your website.</p>
        <div class="footer_contact_info">   
            <a  href="tel:7326081230"><img alt="Phone Icon" class="footer_contact_icons" src="{{ asset('/jesse/img/footer%20phone%20icon-min.png') }}" /></a> <span><a style="text-decoration:none; color:#fff;" href="tel:7326081230">Call &nbsp;732-608-1230</a></span>
        </div>
        <div class="footer_contact_info">
            <img alt="Envelope Icon" src="{{ asset('/jesse/img/footer%20mail%20icon-min.png') }}" /> <span style="text-decoration:none; color:#fff;">contact@jessethewebguy.com</span>
        </div>              
    </div>

    <div class="three_fifth">               
        <form method="post" action="email.php"  >   
                                <div>
                <div class="input_div" id="contact_name_div">
                    <label for="contact_name">Name</label>
                    <input id="contact_name" class="input-name" type="text" name="name" required>
                </div>

                <div class="input_div" id="contact_email_div">
                    <label for="contact_email">E-Mail</label>
                    <input id="contact_email" class="input-email" type="email" name="email" required>
                </div>
            </div>
                
            <div style="width:100%; clear:both;" ></div>
            
            <div>
                <label for="contact_message">Your Message</label>
                <textarea id="contact_message" class="area-field" name="comment" required></textarea>
            </div>
            
            <div id="contact_submit_div">
                <input id="submit" type="submit" value="Send message" >
            </div>
            
            <p id="privacy_msg">I hate spam too! Don't worry I keep all contact info sent to me 100% confidential. Under no circumstances will your info be shared with any third party sources.</p>
        </form>
    </div>          
</footer>

<div style="width:100%; clear:both;" ></div>

<div id="footer_bar">
    <div id="title_div">
        <a href="https://jessethewebguy.com/">
            <img alt="Footer Logo" src="{{ asset('/jesse/img/jesse%20headshot%20cartoon%20logo%20-%20white.png') }}" />
            <p>Jesse The Web Guy</p>
        </a>
    </div>
    <div id="phone_contact_div">    
        <p><a style="text-decoration:none; color:#fff;" href="tel:7326081230">732.608.1230</a></p>
        <a href="tel:7326081230"><img alt="Cell Phone Icon" src="{{ asset('/jesse/img/cell_phone_icon-min.png') }}" /></a>
    </div>
</div>