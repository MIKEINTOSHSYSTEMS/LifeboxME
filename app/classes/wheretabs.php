<?php

class WhereTabs
{
    protected static function &getGridTabs($table)
    {
		global $strTableName;

		if(!$table)
            $tableName = $strTableName;
        else
            $tableName = $table;

        if (GetEntityType($tableName) === "")
            return false;

        $pSet = new ProjectSettings($tableName);

        return $pSet->_tableData['whereTabs'];
    }

    protected static function &getGridTab($table, $id)
    {
        $gridTabs = &WhereTabs::getGridTabs($table);
        if ($gridTabs === false)
            return false;

        foreach ($gridTabs as &$tab) {
            if ($tab['id'] == $id)
                return $tab;
        }
        return false;
    }

    public static function addTab($table, $where, $title, $id)
    {
        $gridTabs = &WhereTabs::getGridTabs($table);
        if ($gridTabs === false)
            return false;

        foreach ($gridTabs as $tab) {
            if ($tab['id'] == $id)
                return false;
        }

        $gridTabs[] = array(
            'id' => $id,
            'title' => array( 
				'type' => mlTypeText,
				'text' => $title
			),
            'where' => $where,
            'showCount' => false,
            'hideEmpty' => false,
        );

        return true;
    }

    public static function deleteTab($table, $id)
    {
        $gridTabs = &WhereTabs::getGridTabs($table);
        if ($gridTabs === false)
            return false;

        foreach ($gridTabs as $key => $tab) {
            if ($tab['id'] == $id) {
                unset($gridTabs[$key]);
                break;
            }
        }
		return true;
    }

    public static function setTabTitle($table, $id, $title)
    {
        $tab = &WhereTabs::getGridTab($table, $id);

        if ($tab) {
            $tab['title'] = array( 
				'type' => mlTypeText,
				'text' => $title
			);
            return true;
        }
        return false;
    }

    public static function setTabWhere($table, $id, $where)
    {
        $tab = &WhereTabs::getGridTab($table, $id);

        if ($tab) {
            $tab['where'] = $where;
            return true;
        }
        return false;
    }

	/**
	 * @param String table
	 * @param String id
	 * @param Boolean showIdCount
	 */
	public static function setTabShowCount($table, $id, $showCount)
    {
        $tab = &WhereTabs::getGridTab($table, $id);

        if ($tab) {
            $tab['showCount'] = $showCount ? 1 : 0;
            return true;
        }
        return false;
    }

	/**
	 * @param String table
	 * @param String id
	 * @param Boolean hideEmpty
	 */
	public static function setTabHideEmpty($table, $id, $hideEmpty)
    {
        $tab = &WhereTabs::getGridTab($table, $id);

        if ($tab) {
            $tab['hideEmpty'] = $hideEmpty ? 1 : 0;
            return true;
        }
        return false;
    }

}
