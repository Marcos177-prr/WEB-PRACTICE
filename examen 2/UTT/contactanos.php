<?php
include "includes/footer.php"
include "includes/header.php";

?>
    <section>
        <h2>contacto</h2>
        <!--IMAGEN-->
    </section>
    
    <section>
        <h2>fill the form</h2>
        <div>
            <form action="">
                <fieldset>
                    <legend>Auto self information</legend>
                    <div>
                        <label for="name">name:</label>
                        <input type="text" name="name" id="name" placeholder="Your name">
                    </div>
                    <div>
                        <label for="e-mail">e-mail</label>
                        <input type="text" name="e-mail" id="e-mail" placeholder="Your e-mail">
                    </div>
                    <div>
                        <label for="phone">Phone</label>
                        <input type="text" name="Phone" id="Phone" placeholder="555 5 5555 555">
                    </div>
                    <div>
                        <label for="msg"></label>
                        <textarea name="msg" id="msg" placeholder="Your message"></textarea>

                    </div>
                </fieldset>
                <fieldset>
                     <legend>Facility information</legend>
                     <div>
                        <label for="vencom">sell or buy</label>
                        <input type="select" name="vencom" id="vencom">
                     </div>
                     <div>
                        <label for="quantity"></label>
                        <input type="number" name="quantity" id="quantity">
                     </div>
                </fieldset>
                <fieldset>
                    <legend>COntact</legend>
                    <label for="contactForm">ContacForm</label>
                    <label for="tel">Phone</label>
                    <input type="radio" name="tel" id="tel">
                    <label for="email">Email</label>
                    <input type="radio" name="email" id="email">

                    <div>
                        <label for="date">Date</label>
                        <input type="date" name="date" id="date">
                    </div>

                    <div>
                        <label for="time">Time</label>
                        <input type="time" name="time" id="time">
                    </div>
                </fieldset>
                <div>
                    <button>Contactame</button></div>
            </form>
        </div>
    </section>
    <?php
include "includes/footer.php";
include "includes/header.php";
?>