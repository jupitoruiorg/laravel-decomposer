<?php

namespace Lubusin\Decomposer\Controllers;

use Illuminate\Routing\Controller;
use Lubusin\Decomposer\Decomposer;

class DecomposerController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $composerArray = Decomposer::getComposerArray();

        $packages = Decomposer::getPackagesAndDependencies($composerArray['require']);

        $version = Decomposer::getDecomposerVersion($composerArray, $packages);

        $laravelEnv = Decomposer::getLaravelEnv($version);

        $serverEnv = Decomposer::getServerEnv();

        $serverExtras = Decomposer::getServerExtras();

        $laravelExtras = Decomposer::getLaravelExtras();

        $extraStats = Decomposer::getExtraStats();

        return view(config('decomposer.view', 'decomposer::index'), compact('packages', 'laravelEnv', 'serverEnv', 'extraStats', 'serverExtras', 'laravelExtras'));
    }
}
