<?php

namespace App\Controller;

use App\Form\SalesForm;

/**
 * Orders Controller.
 */
class OrdersController extends AppController
{
    /**
     * Add Method.
     */
    public function add()
    {
        $sales = new SalesForm();

        if ($this->request->is(['post', 'put'])) {
            $transaction_execute = $sales->execute($this->request->data);
            $transaction = $sales->getParseData();
            if ($transaction_execute) {
                $this->Flash->success(
                    __('Payment Completed Successfully: '.$transaction['transaction_id'])
                );
                $this->render('success');
            } else {
                $this->Flash->error(
                    __('Payment Failed: '.$transaction['failure_message'].'['.$transaction['failure_short'].']')
                );
            }
        }

        $this->set(compact('sales'));
    }
}