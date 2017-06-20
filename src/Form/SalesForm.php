<?php

namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;
use PaypalWPP\PaypalWPP;
use Cake\Core\Configure;

/**
 * Sales Form class.
 *
 * @extends Cake\Form\Form
 */
class SalesForm extends Form
{
    /**
     * Parse Data Array.
     *
     * @var array
     */
    protected $parseData = [];

    /**
     * Build Schema Method.
     *
     * @param Schema $schema
     *
     * @return Schema $schema
     */
    protected function _buildSchema(Schema $schema)
    {
        return $schema->addField('first_name', 'string')
            ->addField('last_email', 'string')
            ->addField('card_number', 'string')
            ->addField('amount', 'string');
    }

    /**
     * Build Validator Method.
     *
     * @param Validator $validator
     *
     * @return Validator $validator
     */
    protected function _buildValidator(Validator $validator)
    {
        return $validator
            ->notBlank('first_name', __('Your first name is required.'))
            ->notBlank('last_name', __('Your last name is required.'))
            ->creditCard('card_number', [
                'amex',
                'visa',
                'disc',
                'mc',
            ], __('Please enter a valid credit card number.'))
            ->notBlank('amount', __('Please enter an amount.'));
    }

    /**
     * Execute Method.
     *
     * @param array $data
     *
     * @return bool
     */
    protected function _execute(array $data)
    {
        $paypal = new PaypalWPP(Configure::read('PaypalWPP'));

        $payment = $paypal->doDirectPayment($data);

        if ($payment['ACK'] == 'Success') {
            $this->parseData = [
                'transaction_id' => $payment['TRANSACTIONID'],
            ];
            return true;
        } else {
            $this->parseData = [
                'failure_message' => $payment['L_LONGMESSAGE0'],
                'failure_short'   => $payment['L_SHORTMESSAGE0'],
            ];
        }

        return false;
    }

    /**
     * Get Parse Data Method.
     *
     * @return string
     */
    public function getParseData()
    {
        return $this->parseData;
    }
}