import Head from 'next/head'
import Image from 'next/image'
import Link from 'next/link'
import React from 'react'
import Card from '/components/Card.js'
import Heading from '/components/Heading.js' 

export default function Home() {
  

  const [testResults, setTestResults] = React.useState([])

  
  function jsTest(){
   
    if(testResults.length>0){
      alert("This function has already been ran!");
      return;
    }

    let obj1=[  
      'Matt Johnson',
      'Bart Paden',
      'Ryan Doss',
      'Jared Malcolm'
    ];
  
    let obj2= [
      'Matt Johnson',
      'Bart Paden',
      'Jordan Heigle',
      'Tyler Viles'
    ];
  
    
    let obj3 = [... new Set(obj1.concat(obj2))];
  
    setTestResults(obj3.map( (e,idx) => <li key={idx}>{e}</li> ));
  
  
      /*
      expected result
          Matt Johnson
          Bart Paden
          Ryan Doss
          Jared Malcolm
          Jordan Heigle
          Tyler Viles
      
      */
  
   }


  return (
    <div>
      <Head>
        <title>Midwestern: Embedding Success </title>
        <meta name="description" content="Generated by create next app" />
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png"/>
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png"/>

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet" /> 
      
      </Head>

      <header className="mainHeader">

        <img src="/images/Logo.png" className="logo" alt="Logo"  />
        
        <Link href="/contact">
          <a className="headerLink">contact</a>
        </Link>
      
      </header>
      
      <main className="main">
        
         
        <Card image={{url:"/images/Talkie.png",alt:"Talkie"}} heading="Heading Two" body="Integer accumsan molestie nisl, id faucibus urna accumsan quis. Proin vulputate, mauris semper maximus." />
        <Card image={{url:"/images/Rabbit.png",alt:"Rabbit"}} heading="Heading Two" body="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore " />
        <Card image={{url:"/images/Shield.png",alt:"Shield"}} heading="Heading Two" body="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore " />
         
       
         
      </main>
      <section className="section">
        <Heading />
        <p className="section--text">
          Remove the duplicates in 2 Javascript objects (found in readme), 
          add the results to an array and output the list of distinct names 
          in an unordered list below this paragraph when {' '}
          <a  onClick={()=>jsTest()}>this link</a> is clicked. 
          If the operation has been completed already, notify the user that this 
          has already been done. 

        </p>
        <a name="results"></a>
        <ul id="results">
          {testResults}
        </ul>

      </section>
      
      
    </div>
  )
}


