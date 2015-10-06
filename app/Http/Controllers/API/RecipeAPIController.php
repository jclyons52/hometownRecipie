<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Libraries\Repositories\RecipeRepository;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class RecipeAPIController extends AppBaseController
{
	/** @var  RecipeRepository */
	private $recipeRepository;

	function __construct(RecipeRepository $recipeRepo)
	{
		$this->recipeRepository = $recipeRepo;
		$this->middleware('admin');
	}

	/**
	 * Display a listing of the Recipe.
	 * GET|HEAD /recipes
	 *
	 * @return Response
	 */
	public function index()
	{
		$recipes = $this->recipeRepository->all();

		return $this->sendResponse($recipes->toArray(), "Recipes retrieved successfully");
	}

	/**
	 * Show the form for creating a new Recipe.
	 * GET|HEAD /recipes/create
	 *
	 * @return Response
	 */
	public function create()
	{
	}

	/**
	 * Store a newly created Recipe in storage.
	 * POST /recipes
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if(sizeof(Recipe::$rules) > 0)
			$this->validateRequestOrFail($request, Recipe::$rules);

		$input = $request->all();

		$recipes = $this->recipeRepository->create($input);

		return $this->sendResponse($recipes->toArray(), "Recipe saved successfully");
	}

	/**
	 * Display the specified Recipe.
	 * GET|HEAD /recipes/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$recipe = $this->recipeRepository->apiFindOrFail($id);

		return $this->sendResponse($recipe->toArray(), "Recipe retrieved successfully");
	}

	/**
	 * Show the form for editing the specified Recipe.
	 * GET|HEAD /recipes/{id}/edit
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		// maybe, you can return a template for JS
//		Errors::throwHttpExceptionWithCode(Errors::EDITION_FORM_NOT_EXISTS, ['id' => $id], static::getHATEOAS(['%id' => $id]));
	}

	/**
	 * Update the specified Recipe in storage.
	 * PUT/PATCH /recipes/{id}
	 *
	 * @param  int              $id
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$input = $request->all();

		/** @var Recipe $recipe */
		$recipe = $this->recipeRepository->apiFindOrFail($id);

		$result = $this->recipeRepository->updateRich($input, $id);

		$recipe = $recipe->fresh();

		return $this->sendResponse($recipe->toArray(), "Recipe updated successfully");
	}

	/**
	 * Remove the specified Recipe from storage.
	 * DELETE /recipes/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->recipeRepository->apiDeleteOrFail($id);

		return $this->sendResponse($id, "Recipe deleted successfully");
	}
}
