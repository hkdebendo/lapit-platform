<?php


namespace Core;

class Controller
{
    /**
     * Load a model
     *
     * @param string $model Model class name
     * @return object       Instance de model
     */
    protected function model(string $model)
    {
        $file = __DIR__ . '/../app/models/' . $model . '.php';
        if (file_exists($file)) {
            require_once $file;
            $class = '\App\\Models\\' . $model;
            return new $class();
        }
        throw new \Exception("Model $model not found.");
    }

    /**
     * Load a view
     *
     * @param string $view View path relative to app/views
     * @param array  $data Data to extract into view
     */
    protected function view(string $view, array $data = [])
    {
        $file = __DIR__ . '/../app/views/' . $view . '.php';
        if (file_exists($file)) {
            extract($data);
            require_once __DIR__ . '/../app/views/layouts/header.php';
            require_once $file;
            require_once __DIR__ . '/../app/views/layouts/footer.php';
        } else {
            throw new \Exception("View $view not found.");
        }
    }
}
?>
