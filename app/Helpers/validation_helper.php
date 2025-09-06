<?php

if (!function_exists('runValidation')) {
    /**
     * Ejecuta las validaciones de una entidad
     *
     * @param string $entity   Nombre de la entidad
     * @param \CodeIgniter\HTTP\IncomingRequest $request
     * @return array           Devuelve array de errores (vacío si no hay)
     */
    function runValidation(string $entity, $request): array
    {
        $validation = \Config\Services::validation();

        switch ($entity) {
            case 'recurso':
                $rules  = (new \App\Validations\RecursoValidation())->rules;
                $errors = (new \App\Validations\RecursoValidation())->errors;
                break;

            default:
                throw new \Exception("No hay validación definida para la entidad: {$entity}");
        }

        $validation->setRules($rules, $errors);
        if (!$validation->withRequest($request)->run()) return $validation->getErrors();

        return [];
    }
}