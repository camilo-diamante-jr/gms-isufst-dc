<?php


/**
 * @var array $data                     Provided by AdminController
 * @var string $breadcrumbActiveItem    Extracted from $data
 * @var array|null $userProfile         Added by Controller::renderView
 */

require_once '../core/Controller.php';


class AdminController extends Controller
{

    private $notificationModel;



    public function __construct($pdo)
    {
        parent::__construct($pdo);
        $this->notificationModel = $this->loadModel("NotificationModel");
    }

    public function viewAdminDashboard()
    {
        $data = [
            'contentHeaderTitle' => 'Dashboard | Admin',
            'breadcrumbActiveItem' => 'Dashboard',
        ];
        $this->renderView('/portals/admin/dashboard/index', $data);
    }

    /* 

    METHODS  TO VIEW SCHEDULES 
    
    */

    public function viewStudents()
    {

        $data = [
            'contentHeaderTitle' => 'Students',
            'breadcrumbActiveItem' => 'Students',

        ];
        $this->renderView('/portals/admin/registry/students', $data);
    }
}
