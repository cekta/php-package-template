<?php

declare(strict_types=1);

use Testo\Application\Config\ApplicationConfig;
use Testo\Application\Config\SuiteConfig;
use Testo\Codecov\CodecovPlugin;
use Testo\Codecov\Report\PhpUnitXmlReport;

return new ApplicationConfig(
    src: ["src"],
    plugins: [
        new CodecovPlugin(
            reports: [
                // required fpr infection
                new PhpUnitXmlReport(
                    "/tmp/infection/infection/coverage-xml",
                ),
            ],
        ),
    ],
    suites: [new SuiteConfig(name: "Unit", location: ["tests"])],
);
