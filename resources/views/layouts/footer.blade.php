<footer class="main-footer">
    <div class="float-right d-none d-sm-inline-block">
        <b>Visitas:</b>
        @php
            
            $pageName = request()->path();
          
            
            $pageVisit = \App\Models\PaginaVisita::where('nombre_pagina', $pageName)->first();
            
            $visitas = $pageVisit ? $pageVisit->visitas : 0;
            
        @endphp
        {{ $visitas }}
    </div>
    <strong>Copyright &copy; 2024 <a href="#">DELGAS S.R.L</a></strong> All rights reserved.
</footer>
