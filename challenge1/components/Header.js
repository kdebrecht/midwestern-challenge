
import React from 'react';
import Link from 'next/link';


export default function Header(props){

    const {links, extraClass} = props;

    
    // Handle multiple links
    const linkList = links.map( 
        link => <Link href={link.href}>
                    <a className="headerLink {extraClass}" > {link.title} </a> 
                </Link>
        );

        

    return (

        <header className="  contactHeader ">
            
            <div class="mainHeader">
                <img src="/images/Logo.png" class="logo" alt="Logo"  />
                
                <div>
                    {linkList}
                </div>
                
            </div>
            
        </header>
        
    )
}
