<?php
/**
 * Created by PhpStorm.
 * User: ydenyshchenk
 * Date: 19.06.15
 * Time: 16:21
 */

class Sparta_CustomerSegment_Model_Observer {
    public function addSegmentsToSalesRuleCombine(Varien_Event_Observer $observer)
    {
        $additional = $observer->getEvent()->getAdditional();
        $conditions = (array)$additional->getConditions();

        $conditions = array_merge_recursive($conditions, array(
            array(
                'label' => 'Sparta',
                'value' => 'enterprise_customersegment/segment_condition_segment'
            ),
        ));

        $additional->setConditions($conditions);
        $observer->setAdditional($additional);
    }
}