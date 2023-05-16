 @extends('layouts.navabout-contact')
 @section('content')
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
     <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap"
         rel="stylesheet">
     <div id="submit-msg">
         Your Message has been submitted successfully! <span>&#128525;</span>
     </div>
     <section class="contact" id="contact">

         <div class="contact-form" id="contact-form">
             <h1>Contact <span>Us</span></h1>
             <p>Let us help you! contact us via phone : +20 1156149108 or email : esraaeliba@gmail.com</p>
             <div class="form-div">
                 <input type="" placeholder="Name" required>
                 <input type="email" name="email" id="" placeholder="E-mail" required>
                 <input type="" placeholder="Write a Subject" required>
                 <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"required>
                </textarea>
                 <button id="submitBtn" onclick="showSubmitMsg()" class="btn">confirm</button>
             </div>
         </div>


         <div class="contact-img" id="contact-img">
             <img src="images/TK_email_icon.svg.jpg">
         </div>
     </section>
 @endsection

 <style>
     #submit-msg {
         display: none;
         background: #101010;
         color: white;
         font-size: 30px;
         text-align: center;
         height: 100%;
         width: 100%;
         min-height: 100vh;
         padding-top: 300px;
     }

     * {
         padding: 0;
         margin: 0;
         box-sizing: border-box;
         font-family: 'Josefin Sans', sans-serif;

     }

     section {
         padding: 40px 15%;
     }

     .contact {
         background: #101010;
         height: 100%;
         width: 100%;
         min-height: 100vh;
         display: grid;
         grid-template-columns: repeat(2, 2fr);
         align-items: center;
         grid-gap: 6rem;
     }

     .contact-img img {
         max-width: 100%;
         width: 720px;
         height: auto;
         border-radius: 10px;
     }

     .contact-form h1 {
         font-size: 80px;
         color: #fff;
         margin-bottom: 20px;
     }

     span {
         color: #f9004d;
     }

     .contact-form p {
         color: #c6c9d8bf;
         letter-spacing: 1px;
         line-height: 26px;
         font-size: 1.1rem;
         margin-bottom: 3.8rem;
     }

     .contact-form .form-div {
         position: relative;
     }

     .contact-form .form-div input,
     .form-div textarea {
         width: 100%;
         padding: 17px;
         border: none;
         outline: none;
         background: #191919;
         color: #fff;
         font-size: 1.1rem;
         margin-bottom: 0.7rem;
         border-radius: 10px;
     }

     .contact-form textarea {
         resize: none;
         height: 200px;
     }

     .contact-form .form-div .btn {
         display: inline-block;
         background: #f9004d;
         color: white;
         padding: 1rem;
         font-size: 1, 1rem;
         letter-spacing: 1px;
         text-transform: uppercase;
         font-weight: 600;
         border: 2px solid transparent;
         border-radius: 10px;
         width: 220px;
         transition: ease .20s;
         cursor: pointer;
     }

     .contact-form .form-div .btn:hover {
         border: 2px solid #f9004d;
         background: transparent;
         transform: scale(1.1);
     }

     @media (max-width: 1570px) {
         section {
             padding: 80px 3%;
             transition: .2s;
         }

         .contact-form h1 {
             font-size: 60px;
         }

         .contact-form p {
             margin-bottom: 3rem;
         }
     }

     @media (max-width: 1090px) {
         .contact {
             grid-gap: 2rem;
             transition: .3s;
         }
     }

     @media (max-width: 1000px) {
         .contact {
             grid-template-columns: 1fr;
         }

         .contact-form {
             order: 2;
         }

         .contact-img img {
             max-width: 100%;
             width: 100%;
             height: auto;
             text-align: center;
             margin-bottom: 30px;
         }
     }
 </style>
 <script>
     function showSubmitMsg() {

         const submitBtn = document.getElementById('submitBtn');
         const submitmsgDiv = document.getElementById('submit-msg');
         const contact = document.getElementById('contact');
         const contactForm = document.getElementById('contact-form');

         contact.style.display = "none";
         // contactImg.style.display = "none";
         submitmsgDiv.style.display = "block";
     }
 </script>
