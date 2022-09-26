<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnemyMusic</title>
    <link rel="stylesheet" href="utils/css/style.css">
    <script src="https://kit.fontawesome.com/20f3e44418.js" crossorigin="anonymous"></script>
</head>
<style>
    .nav {
        height: 80px;
        background-color: #0d1b2b;
        width: 100%;
        align-items: center;
        z-index: 999;
        user-select: none;
        justify-content: center;
        transition: background .8s ease, color .2s;
        min-width: 100% !important;
    }

    .input {
        align-items: center;
        background: rgb(13, 27, 43);
        border-radius: 6px;
        display: grid;
        grid-template-columns: 46px 1fr;
        justify-items: center;
        top: 50px;
        transition: 0.25s ease;
        width: 100%;
        margin: 0 auto;
        z-index: 1;
    }

    .input input {
        background: rgb(19, 34, 53);
        border: none;
        color: #fff;
        font-family: Overpass, -apple-system, BlinkMacSystemFont, Segoe UI, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif;
        font-weight: 600;
        letter-spacing: -0.01em;
        margin-left: 0;
        outline: 0;
        padding: 16px 0;
        padding-top: 18px;
        position: relative;
        text-transform: capitalize;
        width: 100%;
        z-index: 2;
        margin-top: 12px;
        border-radius: 20px;
        padding-left: 70px;
    }

    .logo-recherche {
	background-color: #0070ff;
	padding: 20px;
	margin-top: 13px;
	margin-left: 102px;
	z-index: 100;
	border-radius: 20px;
}

    input,
    button,
    select,
    textarea {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
    }

    .container {
        margin: 0 auto;
        margin-top: 0px;
        min-width: 320px;
        padding-left: 20px;
        padding-right: 20px;
        width: 100%;
    }

    @media (min-width: 1040px) and (max-width: 1540px) {
        .container {
            max-width: 1140px;
            padding-left: 50px;
            padding-right: 50px;
        }
    }

    @media (min-width: 760px) and (max-width: 1040px) {
        .container {
            padding-left: 30px;
            padding-right: 30px;
        }
    }
</style>

<body>
    <div id="app">
        <div class="page">
            <div class="nav container">
                <div class="ensemble">
                    <div class="logo"></div>
                    <div class="input">
                        <i class="fas fa-search logo-recherche" aria-hidden="true"></i>
                        <input type="search" name="recherche" autofocus="">
                    </div>
                </div>
            </div>
            <div class="body"></div>
        </div>
    </div>
</body>

</html>