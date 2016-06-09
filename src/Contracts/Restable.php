<?php namespace Teepluss\Restable\Contracts;

interface Restable {

    /**
     * Change code number.
     *
     * @param  integer $code
     * @return \Teepluss\Restable\Restable
     */
    public function code($code);

    /**
     * Response listing.
     *
     * @param  array  $messages
     * @return \Teepluss\Restable\Restable
     */
    public function listing($messages);

    /**
     * Response single.
     *
     * @param  array  $messages
     * @return \Teepluss\Restable\Restable
     */
    public function single($messages);

    /**
     * Response created.
     *
     * @param  array  $messages
     * @return \Teepluss\Restable\Restable
     */
    public function created($messages);

    /**
     * Response updated.
     *
     * @param  array  $messages
     * @return \Teepluss\Restable\Restable
     */
    public function updated($messages);

    /**
     * Response deleted.
     *
     * @return \Teepluss\Restable\Restable
     */
    public function deleted();

    /**
     * Simple response success.
     *
     * @param  mixed  $message
     * @return string
     */
    public function success($message);

    /**
     * Response error.
     *
     * @param  array  $messages
     * @param  int   $type
     * @return \Teepluss\Restable\Restable
     */
    public function error($messages, $type = 400);

    /**
     * Unauthorized.
     *
     * @param  mixed $description
     * @return \Teepluss\Restable\Restable
     */
    public function unauthorized($description = null);

    /**
     * Any error return 400 as bad request.
     *
     * @param  mixed  $description
     * @return \Teepluss\Restable\Restable
     */
    public function bad($description = null);

    /**
     * Alias of error 404 response.
     *
     * @param  array  $messages
     * @return \Teepluss\Restable\Restable
     */
    public function missing($description = null);

    /**
     * Alias of error 422 response.
     *
     * @param  array  $error
     * @return \Teepluss\Restable\Restable
     */
    public function unprocess($errors);

    /**
     * Render response with format.
     *
     * @param  string         $format
     * @param  null|callable  $callback
     * @return mixed
     */
    public function render($format = null, $callback = null);

}