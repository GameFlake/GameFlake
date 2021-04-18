import React from 'react';

function Card(props) {
    return (
        <div className="card shadow mb-4">
            <img className="card-img-top" src={props.img_src} alt="Card image cap"/>
            <div div className="card-body">
                <h5 className="card-title text-center">{props.name} {props.emoji}</h5>
                <p className="card-text text-center">ID-{props.id}</p>
                <ul className="list-group list-group-flush">
                    <li className="list-group-item">{props.exp}</li>
                </ul>
            </div>
        </div>
    );
}

export default Card;