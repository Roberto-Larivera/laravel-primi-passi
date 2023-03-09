<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel in Home</title>
    <link rel="icon" type="image/svg+xml" href="laravel.svg" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <style>
        .fa-moon {
            cursor: pointer;
        }
    </style>
    <div id="app">

        <div class="w-100" :class="darkMode == true ? 'text-bg-dark':'' ">
            <div class="container vh-100 p-5" >
                <div class="row row-cols-1 h-100 d-flex flex-column justify-content-center align-items-center position-relative">
                    <div class="position-absolute top-0 start-100">
                        <i class="fa-solid fa-moon fa-2x" :class="darkMode == true ? 'text-danger':'' " @click="darkMode=!darkMode"></i>
                    </div>
                    <div class="col text-center pb-5">
                        <h1>
                            Hello Word in <span class="text-danger">
                                < Laravel />
                            </span>!
                        </h1>
                        <i class="fa-brands fa-laravel fa-5x text-danger"></i>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active bg-danger" aria-current="home" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-danger" href="/contact-git">Contatto GitHub</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  text-danger" href="/contact-linkedin">Contatto Lintedin</a>
                            </li>
                            <!-- <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li> -->
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <script>
        const {
            createApp
        } = Vue
        createApp({
            data() {
                return {
                    message: 'Hello Vue!',
                    darkMode: false,
                }
            }
        }).mount('#app')
    </script>
</body>

</html>