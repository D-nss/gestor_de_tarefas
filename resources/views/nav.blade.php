<div class="bg-black text-white mb-5">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col p-3">
                <h3 class="color-grey">Gestor de Tarefas</h3>
            </div>
            <div class="col p-3 text-end">

                <span class="mx-3"><i class="bi bi-person me-2"></i>{{session()->get('username')}}</span>
                |
                <a href="{{route('logout')}}" class="btn btn-outline-danger mx-3"><i class="bi bi-door-closed mx-1"></i>Sair</a>
            </div>
        </div>
    </div>
</div>