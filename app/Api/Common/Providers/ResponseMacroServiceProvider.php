<?php

namespace App\Api\Common\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;

use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\Validation\Validator;

use League\Fractal\Manager;
use League\Fractal\Resource\Item;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\ResourceInterface;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;

use App\Api\Common\Contracts\Transformable;

class ResponseMacroServiceProvider extends ServiceProvider
{
    /**
     * Register the application's response macros.
     *
     * @return void
     */
    public function boot()
    {
        $self = $this;

        Response::macro('jsonOk', function ($data, $statusCode = 200) use ($self) {
            $data = $self->transform($data);

            if (!isset($data['data'])) {
                $data = ['data' => $data];
            }

            $body = array_merge(
                ['status' => 'ok'],
                $data
            );

            return Response::json($body, $statusCode);
        });

         Response::macro('jsonError', function ($message, $statusCode = 500, $errorCode = null) use ($self) {
            $body = [
                'status' => 'error',
                'error' => [
                    'message' => $message
                ]
            ];

            if (!is_null($errorCode)) {
                $body['error']['code'] = $errorCode;
            }

            return Response::json($body, $statusCode);
        });
    }

    /**
     * tranform data using fractal
     *
     * @param  array $data
     * @return array
     */
    public function transform($data)
    {
        if ($data instanceof Transformable) {
            $resource = new Item($data, $data->getTransformer());
        }

        if (isset($resource) && $resource instanceof ResourceInterface) {
            $fractal = app()->make(Manager::class);
            $data = $fractal->createData($resource);
        }

        if (method_exists($data, 'toArray')) {
            $data = $data->toArray();
        }

        return $data;
    }
}