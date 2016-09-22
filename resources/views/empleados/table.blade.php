<table class="table">
    <thead>
    <th>Dui</th>
			<th>Id Escuela</th>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Sexo</th>
			<th>Direccion</th>
			<th>Telefono</th>
			<th>Nit</th>
			<th>Isss</th>
			<th>Nup</th>
			<th>Dui Ext</th>
			<th>Fecha Exp</th>
			<th>Nom Afp</th>
      <th>Email</th>
			<th>Fecha Nac</th>
			<th>Nacionalidad</th>
			<th>Estado Civil</th>
			<th>Nombre Conyugue</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($empleados as $empleado)
    <tr>
      <td>{!! $empleado->dui !!}</td>
			<td>{!! $empleado->id_escuela !!}</td>
			<td>{!! $empleado->nombres !!}</td>
			<td>{!! $empleado->apellidos !!}</td>
			<td>{!! $empleado->sexo !!}</td>
			<td>{!! $empleado->direccion !!}</td>
			<td>{!! $empleado->telefono !!}</td>
			<td>{!! $empleado->nit !!}</td>
			<td>{!! $empleado->isss !!}</td>
			<td>{!! $empleado->nup !!}</td>
			<td>{!! $empleado->dui_ext !!}</td>
			<td>{!! $empleado->fecha_exp !!}</td>
			<td>{!! $empleado->nom_afp !!}</td>
			<td>{!! $empleado->fecha_nac !!}</td>
			<td>{!! $empleado->nacionalidad !!}</td>
			<td>{!! $empleado->estado_civil !!}</td>
			<td>{!! $empleado->nombre_conyugue !!}</td>
      <td>
        <?php /*
        <a href="{!! route('empleados.edit', [$empleado->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
        <a href="{!! route('empleados.delete', [$empleado->id]) !!}" onclick="return confirm('Are you sure wants to delete this Empleado?')"><i class="glyphicon glyphicon-remove"></i></a>
        */ ?>
          <a href="{!! route('empleados.show', [$empleado->dui]) !!}"><i class="glyphicon glyphicon-new-window"></i></a>
          <a href="{!! route('empleados.edit', [$empleado->dui]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
          <a href="{!! route('empleados.delete', [$empleado->dui]) !!}" onclick="return confirm('Are you sure wants to delete this Empleado?')"><i class="glyphicon glyphicon-remove"></i></a>
      </td>
    </tr>
    @endforeach
    </tbody>
</table>
