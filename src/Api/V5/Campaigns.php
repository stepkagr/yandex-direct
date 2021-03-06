<?php

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\SoapClientV5;
use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Auto-generated code.
 */
class Campaigns extends SoapClientV5
{

    const ENDPOINT = 'https://api.direct.yandex.com/v5/campaigns?wsdl';

    /**
     * Constructor.
     *
     * @param EventDispatcherInterface $dispatcher
     * @param User $user
     */
    public function __construct(EventDispatcherInterface $dispatcher, User $user)
    {
        parent::__construct($user->resolveWsdl(self::ENDPOINT), $dispatcher, $user, [
            'classmap' => [
                'MobileAppAdActionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdActionEnum',
                'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\Contract\ExceptionNotification',
                'LimitOffset' => 'Biplane\YandexDirect\Api\V5\Contract\LimitOffset',
                'YesNoEnum' => 'Biplane\YandexDirect\Api\V5\Contract\YesNoEnum',
                'YesNoUnknownEnum' => 'Biplane\YandexDirect\Api\V5\Contract\YesNoUnknownEnum',
                'CurrencyEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CurrencyEnum',
                'StateEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StateEnum',
                'PriorityEnum' => 'Biplane\YandexDirect\Api\V5\Contract\PriorityEnum',
                'PositionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\PositionEnum',
                'CountryCodeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CountryCodeEnum',
                'StatusEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StatusEnum',
                'StatusSelectionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StatusSelectionEnum',
                'ExtensionStatusSelectionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ExtensionStatusSelectionEnum',
                'ScopeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ScopeEnum',
                'AgeRangeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AgeRangeEnum',
                'GenderEnum' => 'Biplane\YandexDirect\Api\V5\Contract\GenderEnum',
                'MobileOperatingSystemTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileOperatingSystemTypeEnum',
                'LangEnum' => 'Biplane\YandexDirect\Api\V5\Contract\LangEnum',
                'RepresentativeRoleEnum' => 'Biplane\YandexDirect\Api\V5\Contract\RepresentativeRoleEnum',
                'OperationEnum' => 'Biplane\YandexDirect\Api\V5\Contract\OperationEnum',
                'ServingStatusEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ServingStatusEnum',
                'Statistics' => 'Biplane\YandexDirect\Api\V5\Contract\Statistics',
                'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\IdsCriteria',
                'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetRequestGeneral',
                'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetResponseGeneral',
                'ApiExceptionMessage' => 'Biplane\YandexDirect\Api\V5\Contract\ApiExceptionMessage',
                'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResultBase',
                'ActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResult',
                'SetBidsActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\SetBidsActionResult',
                'MultiIdsActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\MultiIdsActionResult',
                'ClientsActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\ClientsActionResult',
                'ExtensionModeration' => 'Biplane\YandexDirect\Api\V5\Contract\ExtensionModeration',
                'SortOrderEnum' => 'Biplane\YandexDirect\Api\V5\Contract\SortOrderEnum',
                'SmsEventsEnum' => 'Biplane\YandexDirect\Api\V5\Contract\SmsEventsEnum',
                'CampaignStatusSelectionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignStatusSelectionEnum',
                'CampaignStateEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignStateEnum',
                'CampaignStateGetEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignStateGetEnum',
                'CampaignStatusPaymentEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignStatusPaymentEnum',
                'RelevantKeywordsModeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\RelevantKeywordsModeEnum',
                'DailyBudgetModeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\DailyBudgetModeEnum',
                'CampaignFundsEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignFundsEnum',
                'CampaignTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignTypeEnum',
                'CampaignTypeGetEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignTypeGetEnum',
                'CampaignFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignFieldEnum',
                'TextCampaignFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignFieldEnum',
                'MobileAppCampaignFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignFieldEnum',
                'DynamicTextCampaignFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignFieldEnum',
                'CpmBannerCampaignFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignFieldEnum',
                'TextCampaignSearchStrategyTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignSearchStrategyTypeEnum',
                'TextCampaignNetworkStrategyTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignNetworkStrategyTypeEnum',
                'MobileAppCampaignSearchStrategyTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignSearchStrategyTypeEnum',
                'MobileAppCampaignNetworkStrategyTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignNetworkStrategyTypeEnum',
                'DynamicTextCampaignSearchStrategyTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignSearchStrategyTypeEnum',
                'DynamicTextCampaignNetworkStrategyTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignNetworkStrategyTypeEnum',
                'CpmBannerCampaignSearchStrategyTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignSearchStrategyTypeEnum',
                'CpmBannerCampaignNetworkStrategyTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignNetworkStrategyTypeEnum',
                'TextCampaignSettingsEnum' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignSettingsEnum',
                'TextCampaignSettingsGetEnum' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignSettingsGetEnum',
                'MobileAppCampaignSettingsEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignSettingsEnum',
                'MobileAppCampaignSettingsGetEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignSettingsGetEnum',
                'DynamicTextCampaignSettingsEnum' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignSettingsEnum',
                'DynamicTextCampaignSettingsGetEnum' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignSettingsGetEnum',
                'CpmBannerCampaignSettingsEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignSettingsEnum',
                'CpmBannerCampaignSettingsGetEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignSettingsGetEnum',
                'StrategyWeeklyBudgetBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyWeeklyBudgetBase',
                'StrategyMaximumClicks' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumClicks',
                'StrategyMaximumConversionRate' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumConversionRate',
                'StrategyMaximumAppInstalls' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumAppInstalls',
                'StrategyAverageCpc' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpc',
                'StrategyAverageCpa' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpa',
                'StrategyAverageCpi' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpi',
                'StrategyAverageRoi' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageRoi',
                'StrategyWeeklyClickPackage' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyWeeklyClickPackage',
                'StrategyNetworkDefault' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyNetworkDefault',
                'StrategyMaximumImpressionsBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumImpressionsBase',
                'StrategyWbMaximumImpressions' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyWbMaximumImpressions',
                'StrategyCpMaximumImpressions' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyCpMaximumImpressions',
                'StrategyDecreasedPriceForRepeatedImpressionsBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyDecreasedPriceForRepeatedImpressionsBase',
                'StrategyWbDecreasedPriceForRepeatedImpressions' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyWbDecreasedPriceForRepeatedImpressions',
                'StrategyCpDecreasedPriceForRepeatedImpressions' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyCpDecreasedPriceForRepeatedImpressions',
                'TextCampaignStrategyBase' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignStrategyBase',
                'TextCampaignNetworkStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignNetworkStrategy',
                'TextCampaignSearchStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignSearchStrategy',
                'MobileAppCampaignStrategyBase' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignStrategyBase',
                'MobileAppCampaignSearchStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignSearchStrategy',
                'MobileAppCampaignNetworkStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignNetworkStrategy',
                'DynamicTextCampaignStrategyBase' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignStrategyBase',
                'DynamicTextCampaignSearchStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignSearchStrategy',
                'DynamicTextCampaignNetworkStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignNetworkStrategy',
                'CpmBannerCampaignSearchStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignSearchStrategy',
                'CpmBannerCampaignNetworkStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignNetworkStrategy',
                'TextCampaignStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignStrategy',
                'MobileAppCampaignStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignStrategy',
                'DynamicTextCampaignStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignStrategy',
                'CpmBannerCampaignStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignStrategy',
                'StrategyWeeklyBudgetAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyWeeklyBudgetAddBase',
                'StrategyMaximumClicksAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumClicksAdd',
                'StrategyMaximumConversionRateAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumConversionRateAdd',
                'StrategyMaximumAppInstallsAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumAppInstallsAdd',
                'StrategyAverageCpcAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpcAdd',
                'StrategyAverageCpaAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaAdd',
                'StrategyAverageCpiAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpiAdd',
                'StrategyAverageRoiAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageRoiAdd',
                'StrategyWeeklyClickPackageAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyWeeklyClickPackageAdd',
                'StrategyNetworkDefaultAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyNetworkDefaultAdd',
                'StrategyMaximumImpressionsAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumImpressionsAddBase',
                'StrategyWbMaximumImpressionsAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyWbMaximumImpressionsAdd',
                'StrategyCpMaximumImpressionsAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyCpMaximumImpressionsAdd',
                'StrategyDecreasedPriceForRepeatedImpressionsAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyDecreasedPriceForRepeatedImpressionsAddBase',
                'StrategyWbDecreasedPriceForRepeatedImpressionsAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyWbDecreasedPriceForRepeatedImpressionsAdd',
                'StrategyCpDecreasedPriceForRepeatedImpressionsAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyCpDecreasedPriceForRepeatedImpressionsAdd',
                'TextCampaignStrategyAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignStrategyAddBase',
                'TextCampaignNetworkStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignNetworkStrategyAdd',
                'TextCampaignSearchStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignSearchStrategyAdd',
                'MobileAppCampaignStrategyAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignStrategyAddBase',
                'MobileAppCampaignSearchStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignSearchStrategyAdd',
                'MobileAppCampaignNetworkStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignNetworkStrategyAdd',
                'DynamicTextCampaignStrategyAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignStrategyAddBase',
                'DynamicTextCampaignSearchStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignSearchStrategyAdd',
                'DynamicTextCampaignNetworkStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignNetworkStrategyAdd',
                'CpmBannerCampaignSearchStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignSearchStrategyAdd',
                'CpmBannerCampaignNetworkStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignNetworkStrategyAdd',
                'TextCampaignStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignStrategyAdd',
                'MobileAppCampaignStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignStrategyAdd',
                'DynamicTextCampaignStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignStrategyAdd',
                'CpmBannerCampaignStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignStrategyAdd',
                'Notification' => 'Biplane\YandexDirect\Api\V5\Contract\Notification',
                'SmsSettings' => 'Biplane\YandexDirect\Api\V5\Contract\SmsSettings',
                'EmailSettings' => 'Biplane\YandexDirect\Api\V5\Contract\EmailSettings',
                'TimeTargetingOnPublicHolidays' => 'Biplane\YandexDirect\Api\V5\Contract\TimeTargetingOnPublicHolidays',
                'RelevantKeywordsSettingAdd' => 'Biplane\YandexDirect\Api\V5\Contract\RelevantKeywordsSettingAdd',
                'RelevantKeywordsSetting' => 'Biplane\YandexDirect\Api\V5\Contract\RelevantKeywordsSetting',
                'FrequencyCapSetting' => 'Biplane\YandexDirect\Api\V5\Contract\FrequencyCapSetting',
                'DailyBudget' => 'Biplane\YandexDirect\Api\V5\Contract\DailyBudget',
                'TextCampaignSetting' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignSetting',
                'TextCampaignSettingGet' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignSettingGet',
                'MobileAppCampaignSetting' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignSetting',
                'MobileAppCampaignSettingGet' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignSettingGet',
                'DynamicTextCampaignSetting' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignSetting',
                'DynamicTextCampaignSettingGet' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignSettingGet',
                'CpmBannerCampaignSetting' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignSetting',
                'CpmBannerCampaignSettingGet' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignSettingGet',
                'CampaignFundsParam' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignFundsParam',
                'SharedAccountFundsParam' => 'Biplane\YandexDirect\Api\V5\Contract\SharedAccountFundsParam',
                'FundsParam' => 'Biplane\YandexDirect\Api\V5\Contract\FundsParam',
                'CampaignAssistant' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignAssistant',
                'TimeTargetingBase' => 'Biplane\YandexDirect\Api\V5\Contract\TimeTargetingBase',
                'TimeTargeting' => 'Biplane\YandexDirect\Api\V5\Contract\TimeTargeting',
                'TimeTargetingAdd' => 'Biplane\YandexDirect\Api\V5\Contract\TimeTargetingAdd',
                'CampaignBase' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignBase',
                'TextCampaignBase' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignBase',
                'DynamicTextCampaignBase' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignBase',
                'CpmBannerCampaignBase' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignBase',
                'TextCampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignAddItem',
                'MobileAppCampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignAddItem',
                'DynamicTextCampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignAddItem',
                'CpmBannerCampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignAddItem',
                'CampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignAddItem',
                'TextCampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignUpdateItem',
                'MobileAppCampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignUpdateItem',
                'DynamicTextCampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignUpdateItem',
                'CpmBannerCampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignUpdateItem',
                'CampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignUpdateItem',
                'TextCampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignGetItem',
                'MobileAppCampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignGetItem',
                'DynamicTextCampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignGetItem',
                'CpmBannerCampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignGetItem',
                'CampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignGetItem',
                'CampaignsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignsSelectionCriteria',
                'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetCampaignsRequest',
                'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetCampaignsResponse',
                'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddCampaignsRequest',
                'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddCampaignsResponse',
                'UpdateRequest' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateCampaignsRequest',
                'UpdateResponse' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateCampaignsResponse',
                'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteCampaignsRequest',
                'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteCampaignsResponse',
                'ArchiveRequest' => 'Biplane\YandexDirect\Api\V5\Contract\ArchiveCampaignsRequest',
                'ArchiveResponse' => 'Biplane\YandexDirect\Api\V5\Contract\ArchiveCampaignsResponse',
                'UnarchiveRequest' => 'Biplane\YandexDirect\Api\V5\Contract\UnarchiveCampaignsRequest',
                'UnarchiveResponse' => 'Biplane\YandexDirect\Api\V5\Contract\UnarchiveCampaignsResponse',
                'SuspendRequest' => 'Biplane\YandexDirect\Api\V5\Contract\SuspendCampaignsRequest',
                'SuspendResponse' => 'Biplane\YandexDirect\Api\V5\Contract\SuspendCampaignsResponse',
                'ResumeRequest' => 'Biplane\YandexDirect\Api\V5\Contract\ResumeCampaignsRequest',
                'ResumeResponse' => 'Biplane\YandexDirect\Api\V5\Contract\ResumeCampaignsResponse',
            ]
        ]);
    }

    /**
     * add.
     *
     * @param Contract\AddCampaignsRequest $parameters
     * @return Contract\AddCampaignsResponse
     */
    public function add(Contract\AddCampaignsRequest $parameters)
    {
        return $this->invoke('add', [$parameters]);
    }

    /**
     * update.
     *
     * @param Contract\UpdateCampaignsRequest $parameters
     * @return Contract\UpdateCampaignsResponse
     */
    public function update(Contract\UpdateCampaignsRequest $parameters)
    {
        return $this->invoke('update', [$parameters]);
    }

    /**
     * get.
     *
     * @param Contract\GetCampaignsRequest $parameters
     * @return Contract\GetCampaignsResponse
     */
    public function get(Contract\GetCampaignsRequest $parameters)
    {
        return $this->invoke('get', [$parameters]);
    }

    /**
     * delete.
     *
     * @param Contract\DeleteCampaignsRequest $parameters
     * @return Contract\DeleteCampaignsResponse
     */
    public function delete(Contract\DeleteCampaignsRequest $parameters)
    {
        return $this->invoke('delete', [$parameters]);
    }

    /**
     * archive.
     *
     * @param Contract\ArchiveCampaignsRequest $parameters
     * @return Contract\ArchiveCampaignsResponse
     */
    public function archive(Contract\ArchiveCampaignsRequest $parameters)
    {
        return $this->invoke('archive', [$parameters]);
    }

    /**
     * unarchive.
     *
     * @param Contract\UnarchiveCampaignsRequest $parameters
     * @return Contract\UnarchiveCampaignsResponse
     */
    public function unarchive(Contract\UnarchiveCampaignsRequest $parameters)
    {
        return $this->invoke('unarchive', [$parameters]);
    }

    /**
     * suspend.
     *
     * @param Contract\SuspendCampaignsRequest $parameters
     * @return Contract\SuspendCampaignsResponse
     */
    public function suspend(Contract\SuspendCampaignsRequest $parameters)
    {
        return $this->invoke('suspend', [$parameters]);
    }

    /**
     * resume.
     *
     * @param Contract\ResumeCampaignsRequest $parameters
     * @return Contract\ResumeCampaignsResponse
     */
    public function resume(Contract\ResumeCampaignsRequest $parameters)
    {
        return $this->invoke('resume', [$parameters]);
    }


}

