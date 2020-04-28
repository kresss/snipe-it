<?php
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class BaseTest extends \Codeception\TestCase\Test
{
    use DatabaseTransactions;
    protected function _before()
    {
        Artisan::call('migrate');
        factory(App\Models\Setting::class)->create();
    }

    protected function signIn($user = null)
    {
        if (!$user) {
            $user = factory(User::class)->states('superuser')->create([
                'location_id' => $this->createValidLocation()->id
            ]);
        }
        Auth::login($user);

        return $user;
    }


    protected function createValidAssetModel($state = 'mbp-13-model', $overrides = [])
    {
        return factory(\App\Models\AssetModel::class)->states($state)->create(array_merge([
            'category_id' => $this->createValidCategory(),
            'manufacturer_id' => $this->createValidManufacturer(),
            'depreciation_id' => $this->createValidDepreciation(),
        ],$overrides));
    }

    protected function createValidCategory($state = 'asset-laptop-category', $overrides = [])
    {
        return factory(App\Models\Category::class)->states($state)->create($overrides);
    }

    protected function createValidCompany($overrides = [])
    {
        return factory(App\Models\Company::class)->create($overrides);
    }


    protected function createValidDepartment($state = 'engineering', $overrides = [])
    {
        return factory(App\Models\Department::class)->states($state)->create(array_merge([
            'location_id' => $this->createValidLocation()->id
        ], $overrides));
    }

    protected function createValidDepreciation($state = 'computer', $overrides = [])
    {
        return factory(App\Models\Depreciation::class)->states($state)->create($overrides);
    }

    protected function createValidLocation($overrides = [])
    {
        return factory(App\Models\Location::class)->create($overrides);
    }

    protected function createValidManufacturer($state = 'apple', $overrides = [])
    {
        return factory(App\Models\Manufacturer::class)->states($state)->create($overrides);
    }

    protected function createValidSupplier($overrides = [])
    {
        return factory(App\Models\Supplier::class)->create($overrides);
    }

    protected function createValidStatuslabel($state = 'rtd', $overrides= [])
    {
        return factory(App\Models\Statuslabel::class)->states($state)->create($overrides);
    }

    protected function createValidUser($overrides= [])
    {
        return factory(App\Models\User::class)->create(
            array_merge([ 
                'location_id'=>$this->createValidLocation()->id 
            ], $overrides)
        );
    }

    protected function createValidAsset($overrides = [], $qty = 1)
    {
        $locId = $this->createValidLocation()->id;
        $this->createValidAssetModel();
        return factory(\App\Models\Asset::class, $qty)->states('laptop-mbp')->create(
            array_merge([
                'rtd_location_id' => $locId,
                'location_id' => $locId,
                'supplier_id' => $this->createValidSupplier()->id
            ], $overrides)
        );
    }


}
