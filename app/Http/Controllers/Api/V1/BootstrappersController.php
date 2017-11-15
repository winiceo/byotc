<?php

namespace By\Otc\Http\Controllers\Api\V1;

use By\Otc\Support\BootstrapAPIsEventer;
use Illuminate\Contracts\Routing\ResponseFactory;
use TCG\Voyager\Models\Menu;

class BootstrappersController extends Controller
{
    /**
     * Gets the list of initiator configurations.
     *
     * @param ResponseFactory $response
     * @return mixed
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function show(BootstrapAPIsEventer $events, ResponseFactory $response)
    {

        //dump(menu('admin','bootstrap'));

        return $this->success(["ok"=>333],401);
        return $this->message('请求成功');
    }

    /**
     * 格式化数据.
     *
     * @param string $value
     * @return mixed
     * @author Seven Du <shiweidu@outlook.com>
     */
    protected function formatValue(string $value)
    {
        if (($data = json_decode($value, true)) === null) {
            return $value;
        }

        return $data;
    }
}
