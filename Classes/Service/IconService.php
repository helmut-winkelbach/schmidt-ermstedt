<?php
declare(strict_types = 1);

/*
 * This file is part of the package bk2k/bootstrap-package.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WinkelbachWebdesign\WinkelbachDistribution\Service;

use WinkelbachWebdesign\WinkelbachDistribution\Icons\IconProviderInterface;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * IconService
 */
class IconService
{
    public function getIconSetItems(array &$configuration): void
    {
        $iconSets = [];
        $iconSets[] = ['LLL:EXT:winkelbach_distribution/Resources/Private/Language/Backend.xlf:option.none', ''];

        $iconProviders = $this->getIconProviders();
        foreach ($iconProviders as $iconProvider) {
            $iconSets[] = [
                $iconProvider->getName(),
                $iconProvider->getIdentifier(),
            ];
        }

        $configuration['items'] = $iconSets;
    }

    public function getIconItems(array &$configuration): void
    {
        $iconItems = [];
        $iconItems[] = [
            'LLL:EXT:winkelbach_distribution/Resources/Private/Language/Backend.xlf:option.none',
            0,
            'EXT:winkelbach_distribution/Resources/Public/Images/Icons/none.svg',
        ];

        $iconSetField = $configuration['config']['itemsProcConfig']['iconSetField'] ?? 'icon_set';
        $iconProviderIdentifier = $configuration['row'][$iconSetField][0] ?? '';
        $iconProvider = $this->getIconProviderForIdentifier($iconProviderIdentifier);
        if ($iconProvider !== null) {
            $icons = $iconProvider->getIconList()->getIcons();
            foreach ($icons as $icon) {
                $iconItems[] = [
                    $icon->getName(),
                    $icon->getIdentifier(),
                    $icon->getPreviewImage(),
                ];
            }
        }

        $configuration['items'] = $iconItems;
    }

    public function getIconProviderForIdentifier(string $identifier): ?IconProviderInterface
    {
        $iconProviders = $this->getIconProviders();
        foreach ($iconProviders as $iconProvider) {
            if ($iconProvider->supports($identifier)) {
                return $iconProvider;
            }
        }
        return null;
    }

    public function getIconProviders(): array
    {
        $iconProviders = [];

        if (isset($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/bootstrap-package/icons']['provider'])
            && is_array($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/bootstrap-package/icons']['provider'])
        ) {
            foreach ($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/bootstrap-package/icons']['provider'] as $className) {
                /** @var class-string<IconProviderInterface> $className */
                $iconProviders[] = GeneralUtility::makeInstance($className);
            }
        }

        return $iconProviders;
    }
}
