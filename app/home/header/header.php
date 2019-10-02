<html>
<head>
    <link rel="stylesheet" href="../../frameworks/bootstrap.min.css">
    <script type="text/javascript" src="../../frameworks/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="../../frameworks/bootstrap.min.js"></script>
    <link rel="stylesheet" href="header/header.css">
</head>

<body>
    <div class="fluid-container" id="background-head">
        <div id="box1">
            <div id="userinfo">
                <div id="hello" class="h1">Olá, <span id="username">{nome}</span></div>
                <div id="ag-conta" class="form-text text-muted">ag <span>xxxx</span> c/c <span>xxxxx-x</span></div>
            </div>
        </div>

        <div id="box2">
            <span class="form-text text-muted" id="legenda-saldo">Saldo em conta corrente</span>
            <div id="saldo"><div id="RS" class="form-text text-muted">R$</div> <div id="money">{money}</div></div>
        </div>
    </div>

</body>
</html>