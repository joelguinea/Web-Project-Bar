<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePricingsRequest;
use App\Http\Requests\UpdatePricingsRequest;
use App\Repositories\PricingsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PricingsController extends AppBaseController
{
    /** @var  PricingsRepository */
    private $pricingsRepository;

    public function __construct(PricingsRepository $pricingsRepo)
    {
        $this->pricingsRepository = $pricingsRepo;
    }

    /**
     * Display a listing of the Pricings.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $pricings = $this->pricingsRepository->all();

        return view('pricings.index')
            ->with('pricings', $pricings);
    }

    /**
     * Show the form for creating a new Pricings.
     *
     * @return Response
     */
    public function create()
    {
        return view('pricings.create');
    }

    /**
     * Store a newly created Pricings in storage.
     *
     * @param CreatePricingsRequest $request
     *
     * @return Response
     */
    public function store(CreatePricingsRequest $request)
    {
        $input = $request->all();

        $pricings = $this->pricingsRepository->create($input);

        Flash::success('Pricings saved successfully.');

        return redirect(route('pricings.index'));
    }

    /**
     * Display the specified Pricings.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pricings = $this->pricingsRepository->find($id);

        if (empty($pricings)) {
            Flash::error('Pricings not found');

            return redirect(route('pricings.index'));
        }

        return view('pricings.show')->with('pricings', $pricings);
    }

    /**
     * Show the form for editing the specified Pricings.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pricings = $this->pricingsRepository->find($id);

        if (empty($pricings)) {
            Flash::error('Pricings not found');

            return redirect(route('pricings.index'));
        }

        return view('pricings.edit')->with('pricings', $pricings);
    }

    /**
     * Update the specified Pricings in storage.
     *
     * @param int $id
     * @param UpdatePricingsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePricingsRequest $request)
    {
        $pricings = $this->pricingsRepository->find($id);

        if (empty($pricings)) {
            Flash::error('Pricings not found');

            return redirect(route('pricings.index'));
        }

        $pricings = $this->pricingsRepository->update($request->all(), $id);

        Flash::success('Pricings updated successfully.');

        return redirect(route('pricings.index'));
    }

    /**
     * Remove the specified Pricings from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pricings = $this->pricingsRepository->find($id);

        if (empty($pricings)) {
            Flash::error('Pricings not found');

            return redirect(route('pricings.index'));
        }

        $this->pricingsRepository->delete($id);

        Flash::success('Pricings deleted successfully.');

        return redirect(route('pricings.index'));
    }
}
