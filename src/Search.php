<?php

class Search
{
    public function search($method, $field, $request_body, $model)
    {
        if ($method === 'POST') {
            return $model::where($field, 'like', '%' . $request_body . '%');
        }
    }
}

