<?php
/**
 * Craft Composer plugin for Craft CMS 3.x
 *
 * Superformula's composer plugin
 *
 * @link      superformula.com
 * @copyright Copyright (c) 2018 Scott Baggett
 */

namespace superformula\craftcomposer\controllers;

use superformula\craftcomposer\CraftComposer;

use Craft;
use craft\web\Controller;

/**
 * Composer Controller
 *
 * Generally speaking, controllers are the middlemen between the front end of
 * the CP/website and your plugin’s services. They contain action methods which
 * handle individual tasks.
 *
 * A common pattern used throughout Craft involves a controller action gathering
 * post data, saving it on a model, passing the model off to a service, and then
 * responding to the request appropriately depending on the service method’s response.
 *
 * Action methods begin with the prefix “action”, followed by a description of what
 * the method does (for example, actionSaveIngredient()).
 *
 * https://craftcms.com/docs/plugins/controllers
 *
 * @author    Scott Baggett
 * @package   CraftComposer
 * @since     1.0.0
 */
class AjaxController extends Controller
{

    // Protected Properties
    // =========================================================================

    /**
     * @var    bool|array Allows anonymous access to this controller's actions.
     *         The actions must be in 'kebab-case'
     * @access protected
     */
    protected $allowAnonymous = ['index', 'comments'];

    // Public Methods
    // =========================================================================

    /**
     * Handle a request going to our plugin's index action URL,
     * e.g.: actions/craft-composer/actions
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $result = 'Welcome to the ActionsController actionIndex() method';

        return $result;
    }

    /**
     * Handle a request going to our plugin's actionDoSomething URL,
     * e.g.: actions/craft-composer/ajax/ccomments
     *
     * @return mixed
     */
    public function actionSubmitComment()
    {
        $result = 'Welcome to the AJAX Controller actionSubmitComment() method';

        return $result;
    }
}
