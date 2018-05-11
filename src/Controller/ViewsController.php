<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class ViewsController
{
    public function home()
    {
        return new Response(
            '<html><body>Hello Andes Global</body></html>'
        );
    }
}
