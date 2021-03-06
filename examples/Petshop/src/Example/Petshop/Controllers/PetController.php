<?php

namespace Example\Petshop\Controllers;

use Example\Petshop\ApiModels\Pet;
use Rest\Lib\AbstractController;
use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Http\UploadedFile;

/**
 * Class PetController
 * 
 * Handle /v2/pet
 * 
 * @package Example\Petshop\Controllers
 */
class PetController extends AbstractController {

	/**
	 * Add a new pet to the store
	 * 
	 * @internal Pet $pet
	 * @api POST /pet
	 * @api-response:405 Invalid input
	 * @param Request $request
	 * @param Response $response
	 * @param array $args
	 * @return Response
	 */
	public function addPet(Request $request, Response $response, array $args) {
		/** @var Pet $pet */
		$pet = new Pet($request->getParsedBody());

		//TODO Method addPet not implemented

		return $response->withStatus(501, 'PetController::addPet not implemented');
	}

	/**
	 * Deletes a pet
	 * 
	 * @api DELETE /pet/{petId}
	 * @internal int $petId Pet id to delete
	 * @api-response:400 Invalid ID supplied
	 * @api-response:404 Pet not found
	 * @param Request $request
	 * @param Response $response
	 * @param array $args
	 * @return Response
	 */
	public function deletePet(Request $request, Response $response, array $args) {
		/** @var int $petId */
		$petId = $args['petId'];

		//TODO Method deletePet not implemented

		return $response->withStatus(501, 'PetController::deletePet not implemented');
	}

	/**
	 * Finds Pets by status
	 * 
	 * Multiple status values can be provided with comma separated strings
	 * 
	 * @api GET /pet/findByStatus
	 * @internal array $status Status values that need to be considered for filter
	 * @api-response:200 successful operation
	 * @api-response:400 Invalid status value
	 * @param Request $request
	 * @param Response $response
	 * @param array $args
	 * @return Response
	 */
	public function findPetsByStatus(Request $request, Response $response, array $args) {
		/** @var array $status */
		$status = $request->getQueryParam('status', null);

		//TODO Method findPetsByStatus not implemented

		return $response->withStatus(501, 'PetController::findPetsByStatus not implemented');
	}

	/**
	 * Finds Pets by tags
	 * 
	 * Muliple tags can be provided with comma separated strings. Use tag1, tag2, tag3 for testing.
	 * 
	 * @api GET /pet/findByTags
	 * @internal array $tags Tags to filter by
	 * @api-response:200 successful operation
	 * @api-response:400 Invalid tag value
	 * @param Request $request
	 * @param Response $response
	 * @param array $args
	 * @return Response
	 */
	public function findPetsByTags(Request $request, Response $response, array $args) {
		/** @var array $tags */
		$tags = $request->getQueryParam('tags', null);

		//TODO Method findPetsByTags not implemented

		return $response->withStatus(501, 'PetController::findPetsByTags not implemented');
	}

	/**
	 * Find pet by ID
	 * 
	 * Returns a single pet
	 * 
	 * @api GET /pet/{petId}
	 * @internal int $petId ID of pet to return
	 * @api-response:200 Example\Petshop\ApiModels\Pet successful operation
	 * @api-response:400 Invalid ID supplied
	 * @api-response:404 Pet not found
	 * @param Request $request
	 * @param Response $response
	 * @param array $args
	 * @return Response
	 */
	public function getPetById(Request $request, Response $response, array $args) {
		/** @var int $petId */
		$petId = $args['petId'];

		//TODO Method getPetById not implemented

		return $response->withStatus(501, 'PetController::getPetById not implemented');
	}

	/**
	 * Update an existing pet
	 * 
	 * @api PUT /pet
	 * @internal Pet $pet
	 * @api-response:400 Invalid ID supplied
	 * @api-response:404 Pet not found
	 * @api-response:405 Validation exception
	 * @param Request $request
	 * @param Response $response
	 * @param array $args
	 * @return Response
	 */
	public function updatePet(Request $request, Response $response, array $args) {
		/** @var Pet $pet */
		$pet = new Pet($request->getParsedBody());

		//TODO Method updatePet not implemented

		return $response->withStatus(501, 'PetController::updatePet not implemented');
	}

	/**
	 * Updates a pet in the store with form data
	 * 
	 * @internal int $petId ID of pet that needs to be updated
	 * @internal string $name Updated name of the pet
	 * @internal string $status Updated status of the pet
	 * @api POST /pet/{petId}
	 * @api-response:405 Invalid input
	 * @param Request $request
	 * @param Response $response
	 * @param array $args
	 * @return Response
	 */
	public function updatePetWithForm(Request $request, Response $response, array $args) {
		/** @var int $petId */
		$petId = $args['petId'];
		/** @var string $name */
		$name = $request->getParam('name', null);
		/** @var string $status */
		$status = $request->getParam('status', null);

		//TODO Method updatePetWithForm not implemented

		return $response->withStatus(501, 'PetController::updatePetWithForm not implemented');
	}

	/**
	 * uploads an image
	 * 
	 * @internal int $petId ID of pet to update
	 * @internal string $additionalMetadata Additional data to pass to server
	 * @internal UploadedFile $file file to upload
	 * @api POST /pet/{petId}/uploadImage
	 * @api-response:200 Example\Petshop\ApiModels\ApiResponse successful operation
	 * @param Request $request
	 * @param Response $response
	 * @param array $args
	 * @return Response
	 */
	public function uploadFile(Request $request, Response $response, array $args) {
		$files = $request->getUploadedFiles();
		/** @var int $petId */
		$petId = $args['petId'];
		/** @var string $additionalMetadata */
		$additionalMetadata = $request->getParam('additionalMetadata', null);
		/** @var UploadedFile $file */
		$file = isset($files['file']) ? $files['file'] : null;

		//TODO Method uploadFile not implemented

		return $response->withStatus(501, 'PetController::uploadFile not implemented');
	}
}