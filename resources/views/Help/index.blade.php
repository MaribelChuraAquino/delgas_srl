@extends('layouts.layout')

@section('title', 'Ayuda - Sistema de Logística GLP')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center text-primary mb-4"><i class="fas fa-question-circle"></i> Bienvenido al Centro de Ayuda</h1>
            <p class="lead text-center mb-5">Aquí encontrarás toda la información que necesitas para usar nuestro sistema de logística GLP de manera eficiente.</p>

            <!-- Sección de Guía General -->
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-info text-white">
                    <h4><i class="fas fa-info-circle"></i> ¿Cómo ver mis cargas?</h4>
                </div>
                <div class="card-body">
                    <p>Para ver el estado y los detalles de tus cargas, puedes ir a la sección <strong>"Cargas"</strong>. Allí podrás encontrar información relevante sobre el destino, el chofer asignado, la cisterna, y otros detalles importantes sobre el transporte de tu carga.</p>
                    <p><i class="fas fa-arrow-right"></i> Solo debes hacer clic en la carga que deseas consultar.</p>
                </div>
            </div>

            <!-- Sección de Chofer y Cisterna -->
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-success text-white">
                    <h4><i class="fas fa-truck"></i> ¿Cómo visualizar el chofer y la cisterna asignada?</h4>
                </div>
                <div class="card-body">
                    <p>En los detalles de cada carga, verás el nombre del chofer asignado y los datos de la cisterna encargada del transporte. Estos datos se actualizan automáticamente según el estado de la carga.</p>
                    <p><i class="fas fa-arrow-right"></i> Si deseas más información, puedes contactar al equipo de soporte.</p>
                </div>
            </div>

            <!-- Sección de Destino -->
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-warning text-white">
                    <h4><i class="fas fa-location-arrow"></i> ¿Cómo consultar el destino de mi carga?</h4>
                </div>
                <div class="card-body">
                    <p>El destino de la carga se muestra en el apartado de <strong>"Destino"</strong> dentro de los detalles de la carga. Allí podrás ver la ubicación a la que se dirige tu carga y cualquier otra información relevante.</p>
                    <p><i class="fas fa-arrow-right"></i> Si el destino no es el correcto, contáctanos para realizar cambios.</p>
                </div>
            </div>

            <!-- Sección de Estados -->
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-primary text-white">
                    <h4><i class="fas fa-sync-alt"></i> ¿Qué significan los estados de la carga?</h4>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Registrado:</strong> La carga ha sido registrada, pero aún no ha comenzado el proceso de transporte.</li>
                        <li class="list-group-item"><strong>En proceso:</strong> La carga está en ruta o en proceso de ser transportada.</li>
                        <li class="list-group-item"><strong>Aprobado:</strong> La carga ha sido aprobada y está lista para su transporte.</li>
                        <li class="list-group-item"><strong>Pendiente de pago:</strong> El pago por el transporte aún no ha sido realizado.</li>
                        <li class="list-group-item"><strong>Pagado:</strong> El pago por el servicio de transporte ha sido completado.</li>
                        <li class="list-group-item"><strong>Confirmado:</strong> La carga ha sido confirmada para su transporte.</li>
                        <li class="list-group-item"><strong>Archivado:</strong> El proceso de la carga ha finalizado o ha sido cancelado.</li>
                    </ul>
                </div>
            </div>

            <!-- Sección de Contacto -->
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-danger text-white">
                    <h4><i class="fas fa-headset"></i> ¿Cómo puedo contactar con soporte?</h4>
                </div>
                <div class="card-body">
                    <p>Si tienes alguna duda o problema con el estado de tu carga, puedes contactarnos a través de la opción <strong>"Soporte"</strong> en el sistema. Nuestro equipo de atención al cliente estará disponible para ayudarte con cualquier inquietud.</p>
                    <p><i class="fas fa-arrow-right"></i> También puedes llamarnos o enviarnos un correo a soporte@logisticaglpsystem.com.</p>
                </div>
            </div>

            <!-- Sección de Modificación de Datos -->
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-secondary text-white">
                    <h4><i class="fas fa-pencil-alt"></i> ¿Puedo modificar los detalles de mi carga?</h4>
                </div>
                <div class="card-body">
                    <p>Actualmente, solo puedes ver los detalles de tu carga. Si necesitas realizar algún cambio, por favor contacta a nuestro equipo de soporte y ellos te ayudarán con el proceso.</p>
                    <p><i class="fas fa-arrow-right"></i> Nuestro equipo estará disponible para ayudarte con cualquier modificación que necesites.</p>
                </div>
            </div>

            <hr>

            <p class="text-center text-muted">Esperamos que esta información te sea útil. Si necesitas más detalles, no dudes en comunicarte con nosotros.</p>
        </div>
    </div>
</div>
@endsection
