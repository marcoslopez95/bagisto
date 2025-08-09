<?php

namespace Webkul\Sales\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class OrderPaymentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        // Collect additional data coming from checkout (e.g., Pago Movil fields)
        $additional = (array) ($request->input('orderData') ?? []);

        // If an image was uploaded (e.g., orderData[capture]), store it and save path
        if ($request->hasFile('orderData.capture')) {
            $file = $request->file('orderData.capture');

            try {
                // Store in public disk so it can be viewed later from admin and customer areas
                $path = $file->store('public/order-payments');

                // Normalize path for Storage::url consumption
                $additional['capture'] = $path;
            } catch (\Throwable $e) {
                // If storing fails, keep it silent and do not include the file
            }
        }

        return [
            'method'       => $this->method,
            'method_title' => $this->method_title,
            'additional'   => $additional,
        ];
    }
}
