<?php
    /**
     * This file is the view file of the plugin. Used for showing
     *  a result of search.
     *
     * CakeSearchInfo: Search information in project database
     * @copyright Copyright 2016, Andrey Klimov.
     * @package plugin.View.Search
     */

    $optUrl = [
        'plugin' => 'cake_search_info',
        'controller' => 'search',
        'action' => 'search',
        '?' => http_build_query(compact('target') +
            ['correct' => true, 'query' => (!empty($queryCorrect) ? $queryCorrect : $query)])];
    $this->Paginator->options([
        'url' => $optUrl
    ]);

    $this->assign('title', __d('cake_search_info', 'Search information'));
    $this->Html->addCrumb(__d('cake_search_info', 'Search information'), [
        'plugin' => 'cake_search_info',
        'controller' => 'search',
        'action' => 'index']);
    $this->Html->addCrumb(__d('cake_search_info', 'Results of search'));
?>
<div class="container">
<?php
    echo $this->Search->correctQuery($query, $queryCorrect, $target, $optUrl);
    echo $this->element('CakeSearchInfo.listSearchResults', compact(
        'query',
        'queryCorrect',
        'queryConfig',
        'result',
        'target',
        'search_targetFields',
        'search_targetDeep'
    ));
?>
</div>