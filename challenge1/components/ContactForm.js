import React from 'react'
import Link from 'next/link'



export default function ContactForm(props){

    const [contact, setContact] = React.useState({})
    
    function submitContactForm(event){
      event.preventDefault();
        


        const headers = {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(contact)
        };

        fetch('https://api.mwi.dev/contact/', headers)
            .then(response => response.json())
            .then(data => {

                console.log(data);
                alert("Your message has been submitted: \nVerification ID:" + data.id);
        
            });
    
    
    }
  
    // Handle the form input change
    // to keep state in sync
    function inputChange(event){
      const {type, name, value} = event.target;
  
      setContact(prevContact => ({...prevContact, [name]:value }) );
  
    }
  
    // example of to use psuedo classes
    // to show errors
    function inputBlur(event){
  
      event.target.classList.add('showValidation')
    }
  

    return (
        <section className="contactFormContainer">
            
            <h2 className="contactForm--heading">Heading Two</h2>

            <form onSubmit={submitContactForm} className="contactForm">

                <label className="">
                    <input placeholder='First Name' 
                        name="firs_name" 
                        className="contactForm--formInput contactForm--firstInput"
                        type="text" 
                        value={contact.firstName} 
                        required
                        onChange={inputChange}  />
                
                    <span className="hidden validationMessage">Required</span>
                
                </label>

                <label className="">
                    <input placeholder='Last Name' 
                        name="last_name" 
                        required
                        type="text" 
                        value={contact.lastName} 
                        className="contactForm--formInput"
                        onChange={inputChange} 
                        />
                
                    <span className="hidden validationMessage">Required</span>

                </label>

                <label className="">
                    <input placeholder='Title' 
                        name="title" 
                        required
                        type="text" 
                        className="contactForm--formInput"
                        value={contact.title} 
                        onChange={inputChange}  />

                    <span className="hidden validationMessage">Required</span>
                
                </label>
                

                
                <label className="">
                    <input placeholder='Email' 
                        name="email" 
                        type="email" 
                        id="email"
                        required
                        className="contactForm--formInput"
                        value={contact.email} 
                        onBlur={inputBlur}
                        onChange={inputChange}  />
                    <span className="hidden validationMessage">Required</span>
                
                </label>
               
                <div className="border">
                    <textarea role="textbox" name="message" placeholder="Message" className="contactForm--formTextArea" onChange={inputChange} >
                        {contact.message}
                    </textarea>
                </div>
                
                <button className="contactForm--button">Submit</button>
            </form>


        </section>
    )


}