<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.shop and write us
 * an email on mikolaj.krol@bitbag.pl.
 */

declare(strict_types=1);

namespace BitBag\SyliusElasticsearchPlugin\Controller\RequestDataHandler;

interface PaginationDataHandlerInterface extends DataHandlerInterface
{
    public const PAGE_INDEX = 'page';

    public const LIMIT_INDEX = 'limit';

    public const DEFAULT_LIMIT = 9;

    public const AVAILABLE_LIMITS = [9, 18, 36];
}
