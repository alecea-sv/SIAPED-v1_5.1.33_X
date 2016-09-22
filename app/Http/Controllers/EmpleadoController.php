<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateEmpleadoRequest;
use App\Http\Requests\UpdateEmpleadoRequest;
use App\Libraries\Repositories\EmpleadoRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class EmpleadoController extends AppBaseController
{

	/** @var  EmpleadoRepository */
	private $empleadoRepository;

	function __construct(EmpleadoRepository $empleadoRepo)
	{
		$this->empleadoRepository = $empleadoRepo;
	}

	/**
	 * Display a listing of the Empleado.
	 *
	 * @return Response
	 */
	public function index()
	{
		$empleados = $this->empleadoRepository->paginate(10);
		return view('empleados.index')->with('empleados', $empleados);
	}

	/**
	 * Show the form for creating a new Empleado.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('empleados.create');
	}

	/**
	 * Store a newly created Empleado in storage.
	 *
	 * @param CreateEmpleadoRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateEmpleadoRequest $request)
	{
		$input = $request->all();
		$empleado = $this->empleadoRepository->create($input);
		Flash::success('Empleado saved successfully.');
		return redirect(route('empleados.index'));
	}

	/**
	 * Display the specified Empleado.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$empleado = $this->empleadoRepository->find($id);
		if(empty($empleado))
		{
			Flash::error('Empleado not found');
			return redirect(route('empleados.index'));
		}
		return view('empleados.show')->with('empleado', $empleado);
	}

	/**
	 * Show the form for editing the specified Empleado.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$empleado = $this->empleadoRepository->find($id);
		if(empty($empleado))
		{
			Flash::error('Empleado not found');
			return redirect(route('empleados.index'));
		}
		return view('empleados.edit')->with('empleado', $empleado);
	}

	/**
	 * Update the specified Empleado in storage.
	 *
	 * @param  int              $id
	 * @param UpdateEmpleadoRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateEmpleadoRequest $request)
	{
		$empleado = $this->empleadoRepository->find($id);
		if(empty($empleado))
		{
			Flash::error('Empleado not found');
			return redirect(route('empleados.index'));
		}
		$this->empleadoRepository->updateRich($request->all(), $id);
		Flash::success('Empleado updated successfully.');
		return redirect(route('empleados.index'));
	}

	/**
	 * Remove the specified Empleado from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$empleado = $this->empleadoRepository->find($id);
		if(empty($empleado))
		{
			Flash::error('Empleado not found');
			return redirect(route('empleados.index'));
		}
		$this->empleadoRepository->delete($id);
		Flash::success('Empleado deleted successfully.');
		return redirect(route('empleados.index'));
	}
}
