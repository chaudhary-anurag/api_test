<?php 
namespace App\Exceptions;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
trait ExceptionTrait
{
	public function apiException($request,$e)
	{
		if($this->isModel($e)){
			return response()->json([
                 'errors' => 'product model not found'

				],404);

		}

		if($this->isHttp($e)){
			return response()->json([
                 'errors' => 'route not found'

				],404);
		
         }
		return parent::render($request,$e);

	}

	public function isModel($e)
	{
		return $e instanceof ModelNotFoundException;
	}

	public function isHttp($e)
	{
		return $e instanceof NotFoundHttpException;
	}
}