  <!-- Navigation -->
  <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">PTFMG</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll active">
                    <div class="btn-group">
                        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            Prédios
                        </button>
                        <ul class="dropdown-menu">
                        <li class="active">
                                <a href="{{url('/estacao')}}">Antiga Estação Ferroviária</a>
                            </li>
                            <li class="active">
                                <a href="{{url('/matadouro')}}">Antigo Matadouro da Alvorada</a>
                            </li>
                            <li class="active">
                                <a href="{{url('/engenheiro')}}">Casa do Engenheiros</a>
                            </li>
                            <li class="active">
                                <a href="{{url('/vicentinos')}}">Casarão dos Vicentinos</a>
                            </li>
                            <li class="active">
                                <a href="{{url('/antoniovieira')}}">Edifício Antônio Vieira</a>
                            </li>
                            <li class="active">
                                <a href="{{url('/emart')}}">EMART</a>
                            </li>
                            <li class="active">
                                <a href="{{url('/rodarte')}}">Escola Estadual Joaquim Rodarte</a>
                            </li>
                            <li class="active">
                                <a href="{{url('/matriz')}}">Matriz São Vicente Férrer</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="page-scroll">
                    <button  class="btn btn-primary">
                    <a href="#history">História</a>
                        </button>
                </li>
                <li class="page-scroll">
                    <button  class="btn btn-primary"><a href="#comment">
                            Comentários
                            </a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>