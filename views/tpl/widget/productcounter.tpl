[{assign var="oConfig" value=$oViewConf->getConfig()}]​

[{if $numberOfProducts}]
    <div style='padding: 20px; font-weight: bold; background: #ffe082;'>
        [{if $oxcmp_user && $oConfig->getConfigParam('oxacproductcountermodule_greetingactive')}]
            Hello [{$oxcmp_user->oxuser__oxfname}]!
        [{/if}]
        Choose from [{$numberOfProducts}] different products your favorites.
    </div>
[{/if}]
