
import React from 'react'


export default function Card(props){

  return (
    <div className="bannerCard">
          <div className="bannerCard--imageContainer">
              <img src={props.image.url} 
                className="bannerCard--image" 
                alt={props.image.alt} />
          </div>

          <div>
            <h2 className="bannerCard--heading" >{props.heading}</h2>
            <p className="bannerCard--mainText">
              {props.body}
            </p>
          </div>
          
          <button className="bannerCard--button">Learn More</button>

        </div>
        
  )
}