<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Escritos</title>
</head>
<body>
    <div id="vm" class="container">
        <h1 class="text-center">Tabla de escritos</h1>
        <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Texto</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(valor,index) in personas" key="index">
                <th scope="row">{{index + 1}}</th>
                <td>{{valor.nombre}}</td>
                <td>{{valor.texto}}</td>
              </tr>
            </tbody>
          </table>
    </div>
    <footer>
        <button onclick="window.location.href='mostrar.php'">Volver</button>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
        let app = new Vue({
            el: "#vm",
            data() {
                return {
                    personas: [
                        {nombre:"Jose",texto:"Nos hace falta mas papel"},
                        {nombre:"María",texto:"Se rompieron 3 impresoras"},
                        {nombre:"Manuel",texto:"Una compu dejo de funcionar"}
                    ]
                }
            },
        })
    </script>
</body>
</html>