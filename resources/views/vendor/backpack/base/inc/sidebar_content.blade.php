<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
@if(backpack_user()->hasRole('superadmin'))
<li><a href='{{ backpack_url('user') }}'><i class='fa fa-tag'></i> <span>Usuarios</span></a></li>
@endif
@if(backpack_user()->hasRole('admin'))
<li><a href='{{ backpack_url('configuration') }}'><i class='fa fa-tag'></i> <span>Configuraciones</span></a></li>
<li><a href='{{ backpack_url('slider') }}'><i class='fa fa-tag'></i> <span>Sliders</span></a></li>
<li><a href='{{ backpack_url('collaborator') }}'><i class='fa fa-tag'></i> <span>Colaboradores</span></a></li>
<li><a href='{{ backpack_url('notice') }}'><i class='fa fa-tag'></i> <span>Noticias</span></a></li>
<li><a href='{{ backpack_url('message') }}'><i class='fa fa-tag'></i> <span>Mensajes</span></a></li>
<li><a href='{{ backpack_url('formation') }}'><i class='fa fa-tag'></i> <span>Formaciones</span></a></li>
<li><a href='{{ backpack_url('gallery') }}'><i class='fa fa-tag'></i> <span>Galeria</span></a></li>
@endif
