<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Equipo GameFlake</title>

    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    <div class="container d-flex flex-column align-items-center ">
        <h1 class="text-center my-4">&#128126; Equipo de GameFlake &#128126;</h1>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
            <div class="col" id="section-adolfo"></div>
            <div class="col" id="section-guillermo"></div>
            <div class="col" id="section-valeria"></div>
        </div>
    </div>
    
    <!-- Load our React components. -->
    <script type="text/babel">
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
    </script>
    

    <!-- Boostrap JS: jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Development CDN React and ReactDOM. Don't use this in production. -->
    <script crossorigin src="https://unpkg.com/react@17/umd/react.development.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@17/umd/react-dom.development.js"></script>

    <!-- Development CDN Babel. Don't use this in production. -->
    <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>

</body>
</html>