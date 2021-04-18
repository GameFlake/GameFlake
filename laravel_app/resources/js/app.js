//require('./bootstrap');
require('./components/Card');

import ReactDOM from 'react-dom';
import Card from './components/Card'

ReactDOM.render(
    <Card 
        name="Adolfo Acosta"
        emoji="&#127844;" 
        id="A01705249"
        img_src="img/adolfo.jpg"
        exp="Descripción de su experiencia en desarrollo web (lenguajes, frameworks, librerías, etc.)."
    />,
    document.getElementById('section-adolfo')
);

ReactDOM.render(
    <Card 
        name="Guillermo Espino" 
        emoji="&#129472;"
        id="A01704354"
        img_src="img/guillermo.jpg"
        exp="Descripción de su experiencia en desarrollo web (lenguajes, frameworks, librerías, etc.)."
    />,
    document.getElementById('section-guillermo')
);

ReactDOM.render(
    <Card 
        name="Valeria Guerra" 
        emoji="&#129360;"
        id="A01705318"
        img_src="/img/valeria.jpg"
        exp="Descripción de su experiencia en desarrollo web (lenguajes, frameworks, librerías, etc.)."
    />,
    document.getElementById('section-valeria')
);