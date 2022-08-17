<template>
    <v-app >
        <views-navigation :color="color" :flat="flat" />
        <div >
            <!-- ======= Hero Section ======= -->
            
            <!-- End Hero -->
        </div>
        <v-scale-transition>
            <v-btn
                fab
                v-show="fab"
                v-scroll="onScroll"
                dark
                fixed
                bottom
                right
                color="secondary"
                @click="toTop"
            >
                <v-icon>mdi-arrow-up</v-icon>
            </v-btn>
        </v-scale-transition>
    </v-app>
</template>

<style>
    br
    {

    }
</style>

<script>
export default {
    name: "app",
    data() {
        return {
            fab: null,
            userId: sessionStorage.getItem("user-id"),
            color: "",
            flat: null,
        };
    },

    methods: {
        onScroll(e) {
            if (typeof window === "undefined") return;
            const top = window.pageYOffset || e.target.scrollTop || 0;
            this.fab = top > 60;
        },

        toTop() {
            this.$vuetify.goTo(0);
        },

        fetchHospitals() {
            this.hospitalsLatLng = [];
            axios
                .get("/api/v1/nearbyhospitals", {
                    params: {
                        lat: this.center.lat,
                        lng: this.center.lng
                    }
                })
                .then(response => {
                    this.hospitals = response.data.nearby;
                    let hospitals = response.data.nearby;
                    hospitals.forEach(hospital => {
                        var position = {
                            ...hospital,
                            lat: hospital.latitude,
                            lng: hospital.longitude
                        };
                        this.hospitalsLatLng.push(position);
                    });
                    console.log(this.hospitalsLatLng);
                })
                .catch(error => {
                    console.log(error);
                })
                .finally(() => {
                    this.tableLoading = false;
                    this.componentOverlay = false;
                });
        },

        showHospital(id) {
            this.hospital = this.hospitals.find(x => x.id === id);
            console.log(this.hospital);
            this.hospitalDialog = true;
        },

        //Get Address to current location
        getUserGeolocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    this.setUserGeolocation
                );
            } else {
                window.clearInterval(window.locationInterval);
                alert("Geolocation is not supported by this browser.");
            }
        },

        //Set Address to current location
        setUserGeolocation(position) {
            var UserGeolocationLatitude = position.coords.latitude;
            var UserGeolocationLongitude = position.coords.longitude;
            this.center = {
                lat: UserGeolocationLatitude,
                lng: UserGeolocationLongitude
            };
            this.address = this.center;
        },

        chipColor(status) {
            if (status == "RECIEVING") {
                return "success";
            } else {
                return "red";
            }
        }
    },

    watch: {
        fab(value) {
            if (value) {
                this.color = "#f8f9fa";
                this.flat = false;
            } else {
                this.color = "transparent";
                this.flat = true;
            }
        }
    },

    created() {
        this.toTop();
        const top = window.pageYOffset || 0;
        if (top <= 60) {
            this.color = "transparent";
            this.flat = true;
        }
        this.fetchHospitals();
    },
};
</script>
