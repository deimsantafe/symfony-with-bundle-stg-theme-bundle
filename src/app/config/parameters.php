<?php
try {
    $parametersFilePathFromEnvironment = isset($_SERVER['PARAMETERS_PATH']) ?
        $_SERVER['PARAMETERS_PATH'] . '/parameters.yml' : '';

    $isParametersFilePresent = isset($_SERVER['PARAMETERS_PATH']) && file_exists($parametersFilePathFromEnvironment);

    $parametersFile = $isParametersFilePresent ? $parametersFilePathFromEnvironment : $container->getParameter('kernel.root_dir') . '/config/parameters.yml';

    $parameters = \Symfony\Component\Yaml\Yaml::parseFile($parametersFile);

    foreach ($parameters['parameters'] as $nombreParametro => $valorParametro) {
        $container->setParameter($nombreParametro, $valorParametro);
    }
} catch (\Exception $exception) {
    var_dump($exception->getMessage());
    echo 'Error al parsear YML ' . "\n";
}
